<?php

namespace App\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Helper
{
    public $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => config('app.base_uri'), //* Change to 'https://api.jet-q.com/' for production
            'http_errors' => false
        ]);
    }

    public function getUID(){
        $owner = session()->get('userdata');
        $owner = $owner['data']['id'];
        return $owner;
    }

    public function apiGET($endpoint,$id){        
        $response = $this->_client->request('GET', $endpoint . $id);
        $data = $this->apiConnection($response);
        return $data;
    }    

    public function apiDELETE($endpoint,$formparams){
        $response = $this->_client->request('DELETE', $endpoint, $formparams);
        $data = $this->apiConnection($response);
        return $data;
    }

    public function apiPUT($endpoint,$formparams){
        $response = $this->_client->request('PUT', $endpoint, $formparams);
        $data = $this->apiConnection($response);
        return $data;
    }

    public function apiPOST($endpoint,$formparams){
        $response = $this->_client->request('POST', $endpoint, $formparams);
        $data = $this->apiConnection($response);
        return $data;
    }
    
    public function apiConnection($response){
        try {    
            $result = json_decode($response->getBody()->getContents(),true);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $result = json_decode($e->getResponse()->getBody()->getContents(), true);
            }
        }
        return $result;
    }

    //flash function

    public function flashSuccess($title) {
        $this->setupFlash("Operation Successful", $title, 'success');
     }
   
     public function flashError($title) {
        $this->setupFlash("Something went wrong", $title, 'error');
     }
   
     private function setupFlash($message, $title, $type) {
        request()->session()->flash('swal_msg', [
           'message' => $message,
           'title' => $title,
           'type' => $type,
        ]);
    }

}

?>