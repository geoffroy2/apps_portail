<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use App\TokenStore\TokenCache;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
  public function signin()
  {



    // Initialize the OAuth client
    $oauthClient = new \League\OAuth2\Client\Provider\GenericProvider([
      'clientId'                => env('OAUTH_APP_ID'),
      'clientSecret'            => env('OAUTH_APP_PASSWORD'),
      'redirectUri'             => env('OAUTH_REDIRECT_URI'),
      'urlAuthorize'            => env('OAUTH_AUTHORITY').env('OAUTH_AUTHORIZE_ENDPOINT'),
      'urlAccessToken'          => env('OAUTH_AUTHORITY').env('OAUTH_TOKEN_ENDPOINT'),
      'urlResourceOwnerDetails' => '',
      'scopes'                  => env('OAUTH_SCOPES')
    ]);

    $authUrl = $oauthClient->getAuthorizationUrl();

    // Save client state so we can validate in callback
    session(['oauthState' => $oauthClient->getState()]);

    // Redirect to AAD signin page
    return redirect()->away($authUrl);
    //return redirect()->to(route('portal'));
  }

  public function signinLogin(Request $request)
  {


    $user = User::where('email', $request->get('email'))->first();


    if($user){
        Auth::login($user);
        return redirect()->to(route('portal'));
    }

  }

  public function callback(Request $request)
  {

    // Validate state
    $expectedState = session('oauthState');
    $request->session()->forget('oauthState');
    $providedState = $request->query('state');

    if (!isset($expectedState)) {
      // If there is no expected state in the session,
      // do nothing and redirect to the home page.
      return redirect('/');
    }

    if (!isset($providedState) || $expectedState != $providedState) {
      return redirect('/')
        ->with('error', 'Invalid auth state')
        ->with('errorDetail', 'The provided auth state did not match the expected value');
    }

    // Authorization code should be in the "code" query param
    $authCode = $request->query('code');
    if (isset($authCode)) {
      // Initialize the OAuth client
      $oauthClient = new \League\OAuth2\Client\Provider\GenericProvider([
        'clientId'                => env('OAUTH_APP_ID'),
        'clientSecret'            => env('OAUTH_APP_PASSWORD'),
        'redirectUri'             => env('OAUTH_REDIRECT_URI'),
        'urlAuthorize'            => env('OAUTH_AUTHORITY').env('OAUTH_AUTHORIZE_ENDPOINT'),
        'urlAccessToken'          => env('OAUTH_AUTHORITY').env('OAUTH_TOKEN_ENDPOINT'),
        'urlResourceOwnerDetails' => '',
        'scopes'                  => env('OAUTH_SCOPES')
      ]);

      try {
        // Make the token request
        $accessToken = $oauthClient->getAccessToken('authorization_code', [
          'code' => $authCode
        ]);


        $graph = new Graph();
        $graph->setAccessToken($accessToken->getToken());

        $user = $graph->createRequest('GET', '/me')
        ->setReturnType(Model\User::class)
        ->execute();

        //dd($user->getMail());

       // Check if user email is inside the laravel local database if not then it creates an entry

        if(!User::where('email',$user->getUserPrincipalName())->exists()){
          $userLara = User::create(array('name'=>$user->getDisplayName(),'email'=> $user->getUserPrincipalName(),
           'adresse_mail' => $user->getMail(), 'phone' => $user->getMobilePhone()));
          Auth::loginUsingId($userLara->id);
        }else{
          $userLara = User::where('email',$user->getUserPrincipalName())->first();
          Auth::loginUsingId($userLara->id);
        }

        $tokenCache = new TokenCache();
        $tokenCache->storeTokens($accessToken,$user);
        // Setting cookies

        //$_COOKIE["login_user"];
        //Call the withCookie() method with the response method
        //$cookieValue = 'e908f5b5ec9dedf0cb5bd964e1206f55';
        //$response->withCookie(cookie('login_user', $cookieValue, 60));
        //setcookie("login_user", md5($user->getUserPrincipalName()), time()+3600);  /* expire in 1 hour */
        return redirect('dashboard');
      }
      catch (League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        return redirect('/')
          ->with('error', 'Error requesting access token')
          ->with('errorDetail', $e->getMessage());
      }
    }

    return redirect('/')
      ->with('error', $request->query('error'))
      ->with('errorDetail', $request->query('error_description'));
  }


  public function signout()
  {
    
    $tokenCache = new TokenCache();
    $tokenCache->clearTokens();
    // SUpression de coockies
    if (isset($login_user['key'])) {
      unset($login_user['key']);
      setcookie('login_user', '', time() - 3600, '/'); // empty value and old timestamp
    }
    Auth::logout();
    return redirect('/');
  }
}
