<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SmsAppController extends Controller
{
    //
    public function smsApp(){
        if(!Auth::check()){
            return redirect('/nopermissions');
        }else{
            //\LogActivity::addToLog('credit-distri');
            $token   = Crypt::encrypt(random_bytes(9));
            $encoded = urlencode(openssl_encrypt(Auth::user()->email,"AES-128-ECB",date("Y.m.d")));
            //return redirect()->to("https://10.100.1.8/portail_app/sms_app/public/login-access?pid=".$encoded."&kei=".$token);
            return redirect()->to(env("APP_URL")."/portail_app/sms_app/public/login-access?pid=".$encoded."&kei=".$token);
        }
    }

}
