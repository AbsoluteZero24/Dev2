<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class zoom {

    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct() {
        // Assign the CodeIgniter super-object
    }

    public function create_room($room) {
        $opsi['topic'] = $rapat->nm_rapat;
        $opsi['type'] = 2;
        $opsi['start_time'] = $rapat->tgl_mulai . 'T' . $rapat->jam_mulai . 'Z';
        $opsi['duration'] = $rapat->durasi;
        $opsi['timezone'] = "ID";
        $opsi['password'] = $rapat->password;
        $opsi['agenda'] = "-";
        //$opsi['settings'] = $array_settings;

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

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
    }

    public function list_room($akun = '', $room) {
        $room = $this->ref_room_model->get($rapat->id_room);
        $akun = $room->akun;
        $jwt = $room->jwt;


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

}
