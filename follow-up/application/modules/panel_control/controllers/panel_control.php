<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class panel_control extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database('wa_kanal_utama', TRUE);
        $this->load->helper('url');
        $this->load->model([
            'query_model',
            'cc/pesanmasuk_model',
            'cc/pesankeluar_model',
            'cc/mst_kanal_model',
            'cc/mst_kanal_chat_model',
            'cc/mst_kanal_respon_model',
            'outbox_model'
        ]);
        $this->template = 'template';
        $this->mst_kanal_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->pesanmasuk_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->pesankeluar_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_respon_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_chat_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->outbox_model->_database = $this->load->database('wa_kanal_utama', TRUE);

        $this->query_model->database('wa_kanal_utama');
        $this->form = 'cs_console';
    }

    function send_message() {
        $post_no_wa = $this->input->post('no_wa');
        $post_kirim_pesan = $this->input->post('kirim_pesan');
        $insert['Pengirim'] = $post_no_wa;
        $insert['Pesan'] = $post_kirim_pesan;
        $insert['Tanggal'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
        $this->pesanmasuk_model->insert($insert);
        redirect($this->form);
    }

    function balas_pesan_cs01() {
        $post_no_wa= $this->input->post('cs01_no_wa');
        $post_pesan = $this->input->post('cs01_respon');
        $insert['Pengirim'] = $post_no_wa;
        $insert['Pesan'] = $post_pesan;
        $insert['Tanggal'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());

        $this->pesanmasuk_model->_database = $this->load->database('wa_kanal_01', TRUE);
        $this->pesanmasuk_model->insert($insert);
        redirect($this->form);
    }
    function balas_pesan_cs02() {
        $post_no_wa= $this->input->post('cs02_no_wa');
        $post_pesan = $this->input->post('cs02_respon');
        $insert['Pengirim'] = $post_no_wa;
        $insert['Pesan'] = $post_pesan;
        $insert['Tanggal'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());

        $this->pesanmasuk_model->_database = $this->load->database('wa_kanal_02', TRUE);
        $this->pesanmasuk_model->insert($insert);
        redirect($this->form);
    }
    function balas_pesan_cs03() {
        $post_no_wa= $this->input->post('cs03_no_wa');
        $post_pesan = $this->input->post('cs03_respon');
        $insert['Pengirim'] = $post_no_wa;
        $insert['Pesan'] = $post_pesan;
        $insert['Tanggal'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());

        $this->pesanmasuk_model->_database = $this->load->database('wa_kanal_03', TRUE);
        $this->pesanmasuk_model->insert($insert);

        redirect($this->form);
    }
    

    function index($visual='normal') {
        $data = array();
        $data['action_add'] = '';
        $data['action_send_message'] = site_url() . '/' . $this->form . '/send_message';
        $data['action_balas_pesan_cs01'] = site_url() . '/' . $this->form . '/balas_pesan_cs01';
        $data['action_balas_pesan_cs02'] = site_url() . '/' . $this->form . '/balas_pesan_cs02';
        $data['action_balas_pesan_cs03'] = site_url() . '/' . $this->form . '/balas_pesan_cs03';

        $data['chat01'] = form_input('pesan01', '', 'style="width:100%" class="form-control"');
        $data['chat02'] = form_input('pesan02', '', 'style="width:100%" class="form-control"');
        $data['chat03'] = form_input('pesan03', '', 'style="width:100%" class="form-control"');
        $data['chat04'] = form_input('pesan04', '', 'style="width:100%" class="form-control"');
        $data['chat05'] = form_input('pesan05', '', 'style="width:100%" class="form-control"');

        $data['kirim_pesan'] = form_input('kirim_pesan', '', 'style="width:100%" class="form-control"');
        $data['no_wa'] = form_input('no_wa', '', 'style="width:100%" class="form-control"');

        $data['cs01_no_wa'] = form_input('cs01_no_wa', '', 'style="width:100%;height:30px" class="form-control" autocomplete="off" placeholder="No. WA ..."');
        $data['cs02_no_wa'] = form_input('cs02_no_wa', '', 'style="width:100%;height:30px" class="form-control" autocomplete="off" placeholder="No. WA ..."');
        $data['cs03_no_wa'] = form_input('cs03_no_wa', '', 'style="width:100%;height:30px" class="form-control" autocomplete="off" placeholder="No. WA ..."');
        $data['cs01_respon'] = form_input('cs01_respon', '', 'style="width:100%;height:30px" class="form-control" autocomplete="off" placeholder="Pesan ..."');
        $data['cs02_respon'] = form_input('cs02_respon', '', 'style="width:100%;height:30px" class="form-control" autocomplete="off" placeholder="Pesan ..."');
        $data['cs03_respon'] = form_input('cs03_respon', '', 'style="width:100%;height:30px" class="form-control" autocomplete="off" placeholder="Pesan ..."');

        $data['pesanmasuk'] = $this->pesanmasuk_model->as_array()->get_all();
        $data['pesankeluar'] = $this->pesankeluar_model->as_array()->get_all();
        $data['kanal'] = $this->mst_kanal_model->as_array()->get_all();
        $data['kanal_chat'] = $this->mst_kanal_chat_model->as_array()->get_all();
        $data['kanal_respon'] = $this->mst_kanal_respon_model->as_array()->get_all();
        $data['chat'] = $this->query_model->get_kanal_chat();
		
		$data['performa_cs'] = $this->query_model->get_performa_cs();
		
        //$data['data_chat01'] = $this->query_model->get_list_chat01();
        //$data['data_chat02'] = $this->query_model->get_list_chat02();

        //$data['data_chat04'] = $this->query_model->get_list_chat04();
        //$data['data_chat05'] = $this->query_model->get_list_chat05();

        $data['outbox_klien'] = $this->outbox_model->as_array()->get_all();


        $this->pesanmasuk_model->_database = $this->load->database('wa_kanal_utama', TRUE);

        $this->query_model->database('wa_kanal_01');
        $data['data_chat_cs01'] = $this->query_model->get_chat();
        $data['data_pesankeluar_cs01'] = $this->query_model->get_pesan_keluar_cs();
        $data['data_pesanmasuk_cs01'] = $this->query_model->get_pesan_masuk_cs();
        $data['data_outbox_cs01'] = $this->query_model->get_outbox();

        $this->query_model->database('wa_kanal_02');
        $data['data_chat_cs02'] = $this->query_model->get_chat();
        $data['data_pesankeluar_cs02'] = $this->query_model->get_pesan_keluar_cs();
        $data['data_pesanmasuk_cs02'] = $this->query_model->get_pesan_masuk_cs();
        $data['data_outbox_cs02'] = $this->query_model->get_outbox();

        $this->query_model->database('wa_kanal_03');
        $data['data_chat_cs03'] = $this->query_model->get_chat();
        $data['data_pesanmasuk_cs03'] = $this->query_model->get_pesan_masuk_cs();
        $data['data_pesankeluar_cs03'] = $this->query_model->get_pesan_keluar_cs();
        $data['data_outbox_cs03'] = $this->query_model->get_outbox();
        
        
        //echo '<pre>';
        //print_r($data['data_outbox_cs03']);

        //show('tmpchat', $data, $this->template);
		if($visual=='normal'){
			show('page_cs', $data, $this->template);
		}
		if($visual=='timeline'){
			show('view_timeline', $data, $this->template);
		}
		if($visual=='chat'){
			show('view_chat', $data, $this->template);
		}
    }

}
