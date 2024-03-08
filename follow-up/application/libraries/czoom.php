<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Czoom {

    protected $CI;
	public $response='';
	public $error= '';

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct() {
        // Assign the CodeIgniter super-object
    }

    public function create_room($akun='',$jwt='',$rapat=[]) {
        $opsi['topic'] = $rapat['topic'];
        $opsi['type'] = 2;
        $opsi['start_time'] = $rapat['date'] . 'T' . $rapat['start_time'] . ':00';
        $opsi['duration'] = $rapat['duration'];
        $opsi['timezone'] = "ID";
        $opsi['password'] = $rapat['password'];
        $opsi['agenda'] = $rapat['agenda'];
        $properti = json_encode($opsi);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.zoom.us/v2/users/" . $akun . "/meetings",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $properti,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $jwt,
                "content-type: application/json"
            ),
        ));
		
        $this->response = curl_exec($curl);
        $this->err = curl_error($curl);

        curl_close($curl);
    }
	
    public function list_room($akun='',$jwt='') {
        $curl = curl_init();
        curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.zoom.us/v2/users/" . $akun . "/meetings?type=upcoming_meetings",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $jwt,
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $array_response = (array) json_decode($response);
        $array_err = (array) json_decode($err);

		if ($err) {
			$this->error = ['status'=>'error','error_message'=>$err];
		} else {
			$this->result_meetings = $array_response['meetings'];
		}		
    }
	

    public function list_roomx($akun = '', $jwt = '') {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.zoom.us/v2/users/" . $akun . "/meetings",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            //CURLOPT_POSTFIELDS => $properti,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $jwt,
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
    }

    public function list_room_tes() {
        
        $akun = 'zoom1@scisi.com';
        $jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Im9TVTJjWWNyU0hpU2FZaVF5VlE1OXciLCJleHAiOjE2MDk0MzA0MDAsImlhdCI6MTU5MTA5MTk4OH0.Xq5DxS5SnmbgLo69EkgRd2odCbCdJhVytAfFuxNRz1c';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.zoom.us/v2/users/" . $akun . "/meetings",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            //CURLOPT_POSTFIELDS => $properti,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $jwt,
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $array_response = (array) json_decode($response);
        $array_err = (array) json_decode($err);
        
        print_r($array_response);
        echo '<br>';
        print_r($array_err);
    }

    public function delete_room($akun='',$jwt='',$id='') {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.zoom.us/v2/delete/meetings/".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            //CURLOPT_POSTFIELDS => $properti,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $jwt,
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
    }

}
