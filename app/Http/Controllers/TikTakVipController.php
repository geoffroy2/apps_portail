<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class TikTakVipController extends Controller
{
    //
    public function tiktak(){
        if(!Auth::check()){
            return redirect('/nopermissions');
        }else{
            $token   = Crypt::encrypt(random_bytes(9));
            $encoded = urlencode(openssl_encrypt(Auth::user()->email,"AES-128-ECB",date("Y.m.d")));
            return redirect()->to("https://appstest.oba/portail_app/tiktak_v2/public/login-access?pid=".$encoded."&kei=".$token); 
        }
    }
}
