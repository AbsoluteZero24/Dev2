<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model(array('reference_model'));
        $this->load->helper('url');
        $this->template = 'template';
        $this->breadcrumbs = 'Home';
    }

    function index($id = '') {
        if ($this->ion_auth->logged_in()) {
            $data['dt'] = '';
            $data['tanggal1'] = date('Y-m-d', strtotime('last month'));
            $data['tanggal2'] = date('Y-m-d');
            redirect('dashboard');
        } else {
            redirect('auth/login');
        }
    }


    /** END DOKUMEN * */
}
