<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;

class RecController extends Controller{

    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }


    public function index() {


        //return view('Portal.Reconciliation.index',compact('responses'));
        
        //return response()->json(["Data" => $responses], 201);

        //return Excel::download(new DataExport, date("Y-m-d", strtotime( '-1 days' ) ).'.xlsx');

        return Excel::store(new DataExport, 'CREDIT_'.date("Y-m-d", strtotime( '-1 days' ) ).'.xlsx','reconciliation');
     
         
    }


}
