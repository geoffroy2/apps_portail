<?php
namespace App\Utilities;

class generateNewToken{

    public function callApi($headers, $args, $url, $method,$successCode, $jsonEncodeArgs = false) {
        $ch = curl_init();
    
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
    
            if (!empty($args)) {
                if ($jsonEncodeArgs === true) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));
                } else {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
                }
            }
        } else /* $method === 'GET' */ {
            if (!empty($args)) {
            curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($args));
            } else {
            curl_setopt($ch, CURLOPT_URL, $url);
            }
        }
    
    
    
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    
    
        // Make sure we can access the response when we execute the call
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    
    
        $data = curl_exec($ch);
    
    
    
        if ($data === false) {
        return array('error' => 'API call failed with cURL error: ' . curl_error($ch));
        }
    
    
    
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    
    
        curl_close($ch);
    
    
    
        $response = json_decode($data, true);
    
    
    
        $jsonErrorCode = json_last_error();
        if ($jsonErrorCode !== JSON_ERROR_NONE) {
        return array(
        'error' => 'API response not well-formed (json error code: '
        . $jsonErrorCode . ')'
        );
        }
    
    
    
        if ($httpCode !== $successCode) {
        $errorMessage = '';
    
    
    
        if (!empty($response['error_description'])) {
        $errorMessage = $response['error_description'];
        } elseif (!empty($response['error'])) {
        $errorMessage = $response['error'];
        } elseif (!empty($response['description'])) {
        $errorMessage = $response['description'];
        } elseif (!empty($response['message'])) {
        $errorMessage = $response['message'];
        } elseif (!empty($response['requestError']['serviceException'])) {
        $errorMessage = $response['requestError']['serviceException']['text']
        . ' ' . $response['requestError']['serviceException']['variables'];
        } elseif (!empty($response['requestError']['policyException'])) {
        $errorMessage = $response['requestError']['policyException']['text']
        . ' ' . $response['requestError']['policyException']['variables'];
        }
    
    
    
        return array('error' => $errorMessage);
        }
    
    
        return $response;
    
    }
    
    
    public function getTokenFromConsumerKey(){
        $url = 'https://api.orange.com/oauth/v3/token';
        $headers = array('Authorization: Basic ' . 'R2x6Y081Z1hub3M3SGJUb0JxMUoyQ0N2alFLanhkZ0c6VWI4alVBSkRBeHl5R2ZrVA==');
        $args = array('grant_type' => 'client_credentials');
        $response = $this->callApi($headers, $args, $url, 'POST', 200);
        return $response['access_token'];
    }
}

