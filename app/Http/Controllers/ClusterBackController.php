<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ClusterBackController extends Controller
{
    //
    public function cluster()
    {
        //dd(Auth::user());
        if(!Auth::check()){
            return redirect('/nopermissions');
        }else{
            //\LogActivity::addToLog('credit-distri');
            $token   = Crypt::encrypt(random_bytes(10));
            $encoded = urlencode(openssl_encrypt(Auth::user()->adresse_mail,"AES-128-ECB",date("Y.m.d")));
            return redirect()->to("https://appstest.oba/cluster/cluster_back_v2/public/login-access?pid=".$encoded."&key=".$token);
        }
    }
}
