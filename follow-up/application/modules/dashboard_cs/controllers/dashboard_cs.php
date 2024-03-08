<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_cs extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model([
			'query_model',
			'cc/trx_percakapan_model',
			'cc/pesanmasuk_model',
			'cc/mst_kanal_model',
			]);
        $this->template = 'template';
		
    }

    function index() {
        $data=array();
		$data['action_add']='';
		
		$data['percakapan'] = $this->trx_percakapan_model->get_all();
		$data['pesanmasuk'] = $this->pesanmasuk_model->get_all();
		$data['mst_kanal'] = $this->mst_kanal_model->get_all();
		
        show('page_cs', $data, $this->template);
    }

    
}
