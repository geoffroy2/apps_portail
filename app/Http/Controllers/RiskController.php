<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RiskController extends Controller
{
    //
    public function risk(){
        if(!Auth::check()){
            return redirect('/nopermissions');
        }else{

            //\LogActivity::addToLog('credit-distri');
            $token   = Crypt::encrypt(random_bytes(9));
            $encoded = urlencode(openssl_encrypt(Auth::user()->adresse_mail,"AES-128-ECB",date("Y.m.d")));
            return redirect()->to("https://appstest.oba/portail_app/grc/public/login-access?pid=".$encoded."&kei=".$token);
        }
      }
}
