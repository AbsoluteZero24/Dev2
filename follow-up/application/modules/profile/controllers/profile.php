<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->template = 'template';
        $this->load->model(array(
            'auth_users_model',
            'reference_model'
        ));
        $this->form = 'profile';
    }

    function index($id = 1) {
        $post = $this->input->post('data');
        if (empty($post)) {
            $data['action_modify'] = site_url() . '/' . $this->form . '/index/' . $id;
            $data['back_button'] = site_url() . '/' . $this->form;
            $data['form'] = $this->form;
            $data['tes'] = $this->session->userdata('username'); 

            // -- loading tabel utama --
            $main_row = $this->auth_users_model->as_array()->get($id);
            $data += reformat_main_row_array($this->auth_users_model, $main_row);

            show('form', $data);
        } else {

            $post = verify_main_input_array($post);

            if ($id != '') {
                $this->auth_users_model->update($id, $post);
            }
            redirect($this->form);
        }
    }

}
