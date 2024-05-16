<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class Alerte_autoController extends Controller
{
    //
    public function Alerte_auto(){
           return redirect()->to("https://appstest.oba/portail_app/alerte_auto/public/test");
          
    } 
}
