<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cek_wa_center extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model([
            'wa_center/wa_center_model',
            'wac/mst_pertanyaan_model',
            'wac/trx_request_header_model',
            'wag/outbox_model',
            'wag/inbox_model',
            'xin/xin_employee_permit_model',
            'query_model'
        ]);
        $this->template = 'template';
    }

    function index($pesan = '')
    {
        if ($pesan != '') {
            $message = $pesan . ' ' . date('Y-m-d H:i:s', time());
        } else {
            $message = 'checkpoint ' . date('Y-m-d H:i:s', time());
        }

        $this->wa_center_model->send_message('62895360007581', $message);
        //$this->query_model->send_message('628121002707', $message);
        //$this->query_model->send_message_ab1('628121002707', $message);
    }
}
