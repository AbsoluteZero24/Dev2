<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class panel extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->template = 'template_modul';
        //$this->template = 'template_dashboard';
        $this->load->model([
            'query_model']);
        $this->template = 'template';
    }

    function index() {
        $data['data'] = $this->query_model->get_kegiatan_hari_ini();
        show('list', $data, $this->template);
    }

}
