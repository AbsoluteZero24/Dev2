<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class main extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->template = 'template_modul';
        //$this->template = 'template_dashboard';
        $this->template = 'template';
    }

    function index() {
        show('index', '', $this->template);
    }

}
