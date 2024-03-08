<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cek_wa_center_02 extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model([
            'wa_center/wa_center_model',
            'query_model'
        ]);
        $this->template = 'template';
    }

    function index($pesan = '')
    {
        if ($pesan != '') {
            $message = $pesan;
        } else {
            $message = 'info';
        }

        $this->wa_center_model->send_message('6281387583746', $message);
    }
}
