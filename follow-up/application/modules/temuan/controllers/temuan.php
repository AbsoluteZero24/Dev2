<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class temuan extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->template = 'template';
        $this->load->model(array(
            'master/mst_temuan_model',
            'master/mst_analisa_model',
            'master/mst_tindak_lanjut_model',
            'query_model',
            'reference_model'));
        $this->form = 'temuan';
    }

    function index() {
        $post_filter = $this->input->post('ip_number');
        $data['action_search'] = site_url() . '/' . $this->form;
        $data['back_button'] = site_url() . '/' . $this->form;
        $data['action_add'] = site_url() . '/' . $this->form . '/modify';
        $data['form'] = $this->form;

        $data['option_expire'] = form_dropdown('expire', array('1' => 'Semua', '2' => "Aktif", '3' => "Kadaluwarsa"), 1, "class='form-control'");
        //$data['ip_number'] = form_dropdown('ip_number', $this->reference_model->get_ip_number(), '', 'id="id_pegawai" style="width:100%" class="form-control chosen-select" required');
        $data['ip_number'] = form_input('ip_number', $post_filter, 'class="form-control" autocomplete="off"');

        $data['data'] = $this->query_model->get_list();
        show('list', $data, "template");
    }

    function modify($id = '') {
        $post = $this->input->post('data');
        if (empty($post)) {
            $data['action_modify'] = site_url() . '/' . $this->form . '/modify/' . $id;
            $data['back_button'] = site_url() . '/' . $this->form;
            $data['form'] = $this->form;

            // -- loading tabel utama --
            $required_list=['nm_kegiatan','tgl_mulai','tgl_selesai','id_jns_kegiatan','lokasi'];
            $main_row = $this->mst_temuan_model->as_array()->get($id);
            $data += reformat_main_row_array($this->mst_temuan_model, $main_row, $required_list);

            // -- loading tabel child --
            //$data_survei = $this->vpti_ip_header_model->get_many_by('id', $data['id']);
            $data_analisa = $this->mst_analisa_model->order_by('no')->get_many_by('id_temuan', $id);
            $row_analisa = array();
            foreach ($data_analisa as $row) {
                $row_analisa[$row->id] = [
                    'no' => form_input('analisa[' . $row->id . '][no]', $row->no, "style='width:100%' class='form-control' "),
                    'analisa_permasalahan' => form_input('analisa[' . $row->id . '][analisa_permasalahan]', $row->analisa_permasalahan, "style='width:100%' class='form-control' "),
                    'delete' => '<a href = "javascript:;" onclick = "return pic_delete(' . $row->id . ');"><i class = "fa fa-times" style="color:red"> </i></a>',
                ];
            }
            $data['row_analisa'] = $row_analisa;

            $data_tindak_lanjut = $this->mst_tindak_lanjut_model->get_many_by('id_temuan', $id);
            $row_pic = array();
            foreach ($data_tindak_lanjut as $row) {
                $row_tindak_lanjut[$row->id] = [
                    'no' => form_input('tindak_lanjut[' . $row->id . '][no]', $row->no, "style='width:100%' class='form-control' "),
                    'tindak_lanjut' => form_input('tindak_lanjut[' . $row->id . '][tindak_lanjut]', $row->tindak_lanjut, "style='width:100%' class='form-control' "),
                    
                    'delete' => '<a href = "javascript:;" onclick = "return pic_delete(' . $row->id . ');"><i class = "fa fa-times" style="color:red"> </i></a>',
                ];
            }
            $data['row_tindak_lanjut'] = $row_tindak_lanjut;
            
// -- deklarasi field khusus --
            //$data['flag_status'] = form_input('data[flag_status]', '', "id='flag_status' class='form-control'  ");
// -- deklarasi baris tabel child --
//echo '<br>';
//            $tgl = array(
//                'type' => 'text',
//                'name' => 'data[tgl_mulai]',
//                'id' => 'tgl_mulai',
//                'value' => format_date($main_row['tgl_mulai'],'d-m-Y'),
//                'class' => 'form-control datepicker',
//                'style' => 'width:150px'
//            );
//            $data['tgl_mulai'] = form_input($tgl);
            //$data['id_jns_kegiatan'] = form_dropdown('data[id_jns_kegiatan]', $this->reference_model->get_jns_kegiatan(), $main_row['id_jns_kegiatan'], 'class="form-control selectpicker" data-style="select-with-transition" required');

            show('form', $data, 'template'); //
        } else {

//-- senscript - save data
            $post = verify_main_input_array($post);

//            echo '<pre>';
//            print_r($post);
//            echo '<br>';
//            $post['tgl_mulai']=format_date($post['tgl_mulai'],"Y-d-m");
//            $post['tgl_selesai']=format_date($post['tgl_selesai'],"Y-d-m");
//            echo '<br>' . format_date($post['jam_mulai'], 'h:i');
//              return;
// -- update tabel utama ---------
            if ($id == '') {
                //$post['usr_crt'] = $this->session->userdata('user_id');
                //$post['tgl_crt'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $id = $this->mst_temuan_model->insert($post);
            } else {
                //$post['usr_upd'] = $this->session->userdata('user_id');
                //$post['tgl_upd'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $this->mst_temuan_model->update($id, $post);
            }
//// -- pengecekan array tabel child ---------
            //$post_pic = verify_submain_input_array($this->input->post('pic'), 'id_kegiatan', 'id_pic', $id);
            //$post_pic_new = verify_submain_input_array($this->input->post('pic_new'), 'id_kegiatan', 'id_pic', $id, 0);
//// --------------- update table child ---------
            if (count($post_pic) > 0) {
                //$this->trx_kegiatan_pic_model->update_batch($post_pic);
            }
            if (count($post_pic_new) > 0) {
                //$this->trx_kegiatan_pic_model->insert_batch($post_pic_new);
            }

            redirect($this->form);
        }
    }

    function delete() {
        $id = $this->input->post('id');
        $this->trx_kegiatan_model->delete($id);
        $this->trx_kegiatan_pic_model->delete_by('id_kegiatan', $id);
        redirect($this->form);
    }

    function pic_delete() {
        $id = $this->input->post('id');
        $this->trx_kegiatan_pic_model->delete($id);
        redirect($this->form);
    }

    function pic_add() {
        $no_urut = $_POST["no_urut"];

        $response = '<tr id = "pic_new' . $no_urut . '" >' .
                '<td>' . form_dropdown('pic_new[' . $no_urut . '][id_pic]', $this->reference_model->get_pic(), 0, "style='width:100%' class='form-control' ") . '</td>' .
                '<td>' . '<a href = "javascript:;" onclick = "return pic_new_del(' . $no_urut . ');"><i class = "ace-icon fa fa-times bigger-130" style="color:red"></i></a>' . '</td>' .
                '</tr>';
        echo $response;
    }

    
}
