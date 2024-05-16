<?php
// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

namespace App\Http\Controllers;

use DateTime;
use App\Token;
use Exception;
use \Osms\Osms;
use Datatables;
use sendSmsSmpp;
use Carbon\Carbon;
use App\Models\User;
use GuzzleHttp\Client;
use App\Utilities\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\Process\Process;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;


class HomeController extends Controller
{


  public function welcome()
  {
    $viewData = $this->loadViewData();
    return view('welcome', $viewData);
  }

  public function portal(){

    //Récupération des applications configurées
    $applis_configurees = json_decode(file_get_contents('portail.json'), true);

    $user = User::where('email', 'mdeki@orangebank.ci')->first();


    if($user){
        Auth::login($user);
    }
    if(Auth::check()){
      return view('Portal.portal', ['applications' => $applis_configurees]);
    }else{
      return redirect('/nopermissions');
    }

  }

  public function annuairedata(Request $request){
    $value = $request->session()->get('key');
    return view('Portal.Datables.annuaire');

  }

  public function annuairedatables(){
    //$logs = \LogActivity::logActivityLists();
    $allEmp = DB::table('oba_emp')->get();
    // dd($allEmp);
    return datatables()->of($allEmp)->make(true);
  }
  // Methode pour envoi de message instantané

  public function helpdesk (){
    //logActivity::addToLog('HelpDesk');
    return redirect()->to("https://orangeci.sysaidit.com/Login.jsp?navLanguage=fr");
  }


  public function freeznew(){
      if(!Auth::check()){
          return redirect('/nopermissions');
      }else{
          $token   = Crypt::encrypt(random_bytes(9));
          $encoded = urlencode(openssl_encrypt(Auth::user()->adresse_mail.';'.Auth::user()->name,"AES-128-ECB",date("Y.m.d")));
            return redirect()->to("https://appstest.oba/portail_app/freeze_app_downgrade/public/login-access?pid=".$encoded."&kei=".$token);
          //return redirect()->to("https://appstest.oba/portail_app/freeze/public/login-access?pid=".$encoded."&kei=".$token);
          //return redirect()->to("https://apps.oba/portail_app/HabiliApp/public/login-access?pid=".$encoded."&kei=".$token);
      }
  }

}
