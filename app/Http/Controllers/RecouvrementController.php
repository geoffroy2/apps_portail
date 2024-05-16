<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RecouvrementController extends Controller
{
    //
    public function recouvrement(){
        if(!Auth::check()){
            return redirect('/nopermissions');
        }else{
            //\LogActivity::addToLog('credit-distri');
            //dd(Auth::user()->apps);
            $token   = Crypt::encrypt(random_bytes(9));
            $data    = Auth::user()->email.','.Auth::user()->name.','.Auth::user()->apps.','.Auth::user()->adresse_mail;
            $encoded = urlencode(openssl_encrypt($data,"AES-128-ECB",date("Y.m.d")));
            // return redirect()->to("https://10.100.1.8/portail_app/sms_app/public/login-access?pid=".$encoded."&kei=".$token);
            //return redirect()->to("https://appstest.oba/portail_app/RecouvrementApp/public/login-access?pid=".$encoded."&kei=".$token);
            return redirect()->to(env("APP_URL")."portail_app/RecouvrementApp/public/login-access?pid=".$encoded."&kei=".$token);
            //return redirect()->to(env("APP_URL")."portail_app/recouvrement_app/public/login-access?pid=".$encoded."&kei=".$token);
        }
    }
}
