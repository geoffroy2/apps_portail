<?php
namespace App\Utilities;

class generateBase64{

    /**
     * Fontion pour convertir une base64 en PDF
     *
     * @param [type] $base64
     * @return void
     */

    /**
     * Api de generation de la base64
     *
     * @param [type] $customer
     * @param [type] $acc_no
     * @param [type] $period
     * @return void
     */
    public static function callApi($customer, $acc_no, $type, $period) {

        // Generated @ codebeautify.org
        $ch = curl_init();
        
        $args   = [
            'type'      => $type,
            'period'    => $period, 
        ];
        
        $url = "https://172.21.6.35:1443/backoffice/customers/$customer/accounts/$acc_no/pdf/statement" . "?" . http_build_query($args);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();
        $headers[] = 'Authorization: Basic b3JhbmdlYmFuazpUZ3VqUDQ1IWdkdFBtPzRk';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $base64 = curl_exec($ch);
        
        curl_close($ch);

   
        // Explode du resultat
        $base_explode = explode(':', $base64);

        if($base_explode[0] == '{"fileName"' ){
	
            // Extraction de la base64 en retirant les trois derniers caractères
            $pdf_base64   = substr($base_explode[2], 0, -3);

            // Extraction du non du fichier contenant l'extension (.pdf) en retirant le caractere (") par vide
            $pdf_name     = str_replace('"','', explode(',', $base_explode[1])[0]);

            $cpt          = explode('-', $pdf_name);

            $name         = strtr($cpt[1], [substr(explode('-', $pdf_name)[1], 3, 5) => 'XXXXX']);
            $pdf_rename   = $cpt[0].'-'.$name.'-'.$cpt[2].'-'.explode('.', $cpt[3])[0].'_'.strtotime('now').'.pdf';

            // Decode base64
            $pdf_decoded = base64_decode($pdf_base64);
            
            // Enregistrement du fichier en pdf
            $pdf = fopen ("/var/www/html/dev/portail/web/statement_month/".$pdf_rename,'w');
            fwrite ($pdf,$pdf_decoded);

            // Retourne le nom du fichier
            return rtrim(app()->basePath('web'), '/').'/statement_month/'.$pdf_rename;
        }else{
            return "";
        }
    
    }

    public static function dateInFrench($date, $type)
    {
        $dateFrensh = strftime("%B %G", strtotime($date));

        if($type == 'quarterly'){

            $month  = [
            "January"     => "LE PREMIER TRIMESTRE", 
            "April"       => "LE DEUXIEME TRIMESTRE", 
            "July"        => "LE TROISIEME TRIMESTRE", 
            "October"     => "LE QUATRIEME TRIMESTRE", 
                   ];

        }else{

            $month  = [
                "January"       => "Janvier", 
                "February"      => "Fevrier", 
                "March"         => "Mars",
                "April"         => "Avril", 
                "May"           => "Mai", 
                "June"          => "Juin", 
                "July"          => "Juillet", 
                "August"        => "Aout", 
                "September"     => "Septembre", 
                "October"       => "Octobre", 
                "November"      => "Novembre", 
                "December"      => "Decembre"
            ];

        }
        
        return strtr($dateFrensh, $month);
    }

}