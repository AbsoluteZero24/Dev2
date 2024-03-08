<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('query_model');
        $this->template = 'template';
    }

    function index() {
        //$data['indikator_kegiatan_vpte']=$this->query_model->get_indikator_kegiatan_vpte($periode);
        $data['total_temuan']=20;
        $data['total_follow_up']=15;
        $data['total_disetujui']=13;
        $data['progres_pekerjaan']=97;
        $data['data'] = $this->query_model->get_list();
        $data['progres'] = $this->query_model->get_progres();
        show('page_01', $data, $this->template);
    }

    
}

