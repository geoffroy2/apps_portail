<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\OsmsJob;
use App\Token;
use Exception;
use Illuminate\Http\Request;

class smsController extends Controller
{
    protected $osms;

    public function __construct(OsmsJob $osms)
    {
        $this->osms = $osms;
    }
    //
    public function sendSmsInfo(Request $request)
    {
        $token = Token::find(1);

        $msg = "Cher(e) client(e) Orange Bank, votre réclamation a été recue et sera résolue dans un délai maximum de 30 jours. Nous vous remercions.";
        
        try{
            $response = $this->osms->sendSms('tel:+2250707012630','tel:+'.$request->get('num'),$msg);
        }catch(Exception $e){
            die($e->getMessage());
        }

        if(!empty($response['error']) && str_contains($response['error'], 'credentials')){
            //$detailCampagne->statut = 0;
            $token->token_key = $this->osms->getTokenFromConsumerKey();
            $token->save();

            // Resend sms
            try{
                $response = $this->osms->sendSms('tel:+2250707012630','tel:+'.$request->get('num'),$msg);
            }catch(Exception $e){
                die($e->getMessage());
            }

        }

        
    }
    
    public function sendSmsClose(Request $request)
    {
        $token = Token::find(1);
        
        $msg = "Cher(e) client(e) Orange Bank, votre réclamation a été traitée. Merci de rester Orange Bank.";
        
        try{
            $response = $this->osms->sendSms('tel:+2250707012630','tel:+'.$request->get('num'),$msg);
        }catch(Exception $e){
            die($e->getMessage());
        }

        if(!empty($response['error']) && str_contains($response['error'], 'credentials')){
            //$detailCampagne->statut = 0;
            $token->token_key = $this->osms->getTokenFromConsumerKey();
            $token->save();

            // Resend sms
            try{
                $response = $this->osms->sendSms('tel:+2250707012630','tel:+'.$request->get('num'),$msg);
            }catch(Exception $e){
                die($e->getMessage());
            }

        }
    }
}
