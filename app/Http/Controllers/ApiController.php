<?php
// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;


class ApiController extends Controller
{
  public function welcome()
  {
    $viewData = $this->loadViewData();

    return view('welcome', $viewData);
  }

  public function portal()
  {
    if(Auth::check()){
      return view('Portal.portal');
    }else{
      return redirect('/nopermissions');
    }
    
  }

  public function search(){
    return view('Portal.Search.index');
  }

  public function searchMethod(Request $request){
    $dataCollect = collect([]);

    $apiresponse1 = Http::get('https://orange-fr.temenoscloud.com/OBAMobApi/api/v1.0.0/party/mobapi/getCustomerById',[
      'customerId' => $request['customerId'],
      ]);

      $data1 = json_decode($apiresponse1);
      
      $data1 = $data1->body;
    
      foreach ($data1 as $dat1) {
          
      }
      

     $apiresponse2 = Http::get('https://orange-fr.temenoscloud.com/OBAMobApi/api/v1.0.0/party/mobapi/getAccountRIB',[
        'customerId' => $request['customerId'],
        ]);
    
        $data2 = json_decode($apiresponse2);
        
        $data2 = $data2->body;
   
        
        $rib1=$data2['0']->rib;

        $rib2=$data2['1']->rib; 
        
      return view('Portal.Search.index',compact('dat1','rib1','rib2'));
  }

  public function smsMethod(Request $request){

    $client = new Client();
    $res = $client->request('GET', 'https://apps.oba/backlog/obasms/send/sendSms.php', [
      'rib' => $request['rib'],
      'receiver' => '06975386',
      'verify' => false,
    ]);

    //->with('message', 'IT WORKS!')
    return redirect('search');
      
  }

  public function test(Request $request){

    $client = new Client();
    $res = $client->request('GET', 'https://apps.oba/backlog/obasms/send/sendSms.php', [
      'rib' => $request['rib'],
      'receiver' => '06975386',
      'verify' => false,
    ]);

    //->with('message', 'IT WORKS!')
    return redirect('search');
      
  }


  public function RecDown(){
    $date=date("Y-m-d", strtotime( '-1 days' ));

    return response()->download('../storage/app/Reconciliation/CREDIT_'.$date.'.xlsx');
    
  }

  /*

    Code  request api pdf rib et account statement
        $account_id = $data2['0']->accountId;

        $client = new Client();
        $res = $client->request('GET', 'https://oba.w-ha.com:1443/backoffice',['auth' => ['orangebank', 'rvMlnA75!']],[
          'customer_id' =>  $request['customerId'],
          'account_id' => $account_id,
          'verify' => false,
        ]);
        dd($res);
    

  */


}