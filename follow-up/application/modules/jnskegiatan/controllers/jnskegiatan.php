<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class jnskegiatan extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->template = 'template';
        $this->load->model(array(
            'tbl_jns_kegiatan_model',
            'reference_model'
        ));
        $this->form = 'jnskegiatan';
    }

    function index($type = '') {
        $data['form'] = $this->form;
//        $post_filter = $this->input->post('filter');
//        $data['action_search'] = site_url() . '/' . $this->form . '/index';
//
//        $data['filter'] = form_input('filter','','placeholder="Filter .." style="width:100%" class="form-control"');
//        $filter = array('io_number' => $post_filter, 'registration_number' => $post_filter);
//
        $data['data'] = $this->tbl_jns_kegiatan_model->get_all();
        show('list', $data, 'template');
    }

    function modify($id = '') {
        $post = $this->input->post('data');
        if (empty($post)) {
            $data['action_modify'] = site_url() . '/' . $this->form . '/modify/' . $id;
            $data['back_button'] = site_url() . '/' . $this->form ;
            $data['form']=$this->form;

// -- loading tabel utama --
            $main_row = $this->tbl_jns_kegiatan_model->as_array()->get($id);
            $data += reformat_main_row_array($this->tbl_jns_kegiatan_model, $main_row);


// -- loading tabel child --
//$data_survei = $this->tbl_jns_kegiatan_model->get_many_by('id', $data['id']);
// -- deklarasi field khusus --
            if ($id == '') {
//$data['tgl_pengajuan'] = date('d-m-Y');
            }
//            $data['tangki_bbm'] = form_checkbox('data[tangki_bbm]', $main_row['tangki_bbm'], $main_row['tangki_bbm']);
//            $data['alm_id_propinsi'] = form_dropdown('data[alm_id_propinsi]', $this->reference_model->get_propinsi(), $main_row['alm_id_propinsi']);
//            $data['id_surveyor'] = form_dropdown('data[id_surveyor]', $this->reference_model->get_surveyor(), $main_row['id_surveyor']);
//            $data['unit'] = form_dropdown('unit', $this->reference_model->get_unit_kerja());            
// -- deklarasi baris tabel child --
//echo '<br>';
//print_r($data);
            show('form', $data);
        } else {

//-- senscript - save data
            $post = verify_main_input_array($post);

// -- update tabel utama ---------
            if ($id == '') {
                $post['usr_crt'] = $this->session->userdata('user_id');
                $post['tgl_crt'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $id = $this->tbl_jns_kegiatan_model->insert($post);
            } else {
                $post['usr_upd'] = $this->session->userdata('user_id');
                $post['tgl_upd'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $this->tbl_jns_kegiatan_model->update($id, $post);
            }

// -- pengecekan array tabel child ---------
//            $post_survei = verify_submain_input_array($this->input->post('survei'), 'id_survei', 'id_bulan', $id);
//            $post_survei_new = verify_submain_input_array($this->input->post('survei_new'), 'id_survei', 'id_bulan', $id, 0);
// --------------- update table child ---------
//            if (count($post_survei) > 0) {
//                $this->mst_pengguna_survei_model->update_batch($post_survei);
//            }
//            if (count($post_survei_new) > 0) {
//                $this->mst_pengguna_survei_model->insert_batch($post_survei_new);
//            }

            redirect($this->form);
        }
    }

    function delete() {
        $id = $this->input->post('id');
        $this->tbl_jns_kegiatan_model->delete($id);
        redirect($this->form);
    }

    function send_to_word() {
        $post = $this->input->post('tgl');
        $tgl = substr($post, strlen($post) - 4, 4) . '-' . substr($post, 4, 2) . '-' . substr($post, 1, 2);
        echo $tgl;
//        if ($tgl == '')
//            return;
        $this->load->library('word');

        $PHPWord = new PHPWord();
//$document = $PHPWord->loadTemplate('d:\draft_ls.docx');


        $document = $PHPWord->loadTemplate($_SERVER['DOCUMENT_ROOT'] . '/e-kopsurindo/uploads/formulir/FormRestitusiObat.docx');

        $data = $this->tbl_jns_kegiatan_model->get_data($tgl);
//        echo '<pre>';
//        print_r($data);
//        return;

        $no = 1;
        $jml = 0;
        $lembar = 1;
        foreach ($data as $row) {
            $nomor = '00' . (string) $no;
            $nomor = substr($nomor, strlen($nomor) - 2, 2);

            $document->setValue('tgl_pengajuan', format_date($row->tgl_pengajuan));
            $document->setValue('nm_pegawai', $row->nm_pegawai);
            $document->setValue('nik', $row->nik);


            $document->setValue('no_' . $nomor, $no);
            $document->setValue('tgl_' . $nomor, format_date($row->tgl_kuitansi));

            $document->setValue('nm_' . $nomor, $row->nm_pasien);


            $document->setValue('sts_' . $nomor, $row->sts_pasien);
            $document->setValue('kd_' . $nomor, $row->kd_mata_anggaran);
            $document->setValue('rs_' . $nomor, $row->rumah_sakit);
            $document->setValue('jml_' . $nomor, number_format($row->jml_diajukan));

//            echo $row->tgl_kuitansi . '<br>';
            $no++;
            if ($no == 12) {
                $document->setValue('jml', number_format($jml));
                $document->save('d:\exportir' . $lembar . '.docx');
                $lembar++;
                $no = 1;
                $jml = 0;
                $document = $PHPWord->loadTemplate($_SERVER['DOCUMENT_ROOT'] . '/e-kopsurindo/uploads/formulir/FormRestitusiObat.docx');
            } else {
                $jml += $row->jml_diajukan;
            }
        }
//$document->save('d:\hasilxx.docx');
        if ($no < 12) {
            for ($x = $no; $x < 12; $x++) {
                $nomor = '00' . (string) $x;
                $nomor = substr($nomor, strlen($nomor) - 2, 2);

                $document->setValue('no_' . $nomor, '');
                $document->setValue('tgl_' . $nomor, '');

                $document->setValue('nm_' . $nomor, '');
                $document->setValue('sts_' . $nomor, '');
                $document->setValue('kd_' . $nomor, '');
                $document->setValue('rs_' . $nomor, '');
                $document->setValue('jml_' . $nomor, '');
            }
            $document->setValue('jml', number_format($jml));
            //$file = base_url() . 'temporer_print_report/form_exportir_' . format_date($tgl, 'Ymd') . '.docx';
            $document->save('d:\exportir' . $lembar . '.docx');
            //$file=base_url().'/formxxxxxx.docx';
            //$file='d:\form_.docx';
            //echo $file;
            //$document->save($file);
        }
//        $file = 'monkey.gif';
//
////        if (!file_exists($file)) {
//            header('Content-Description: File Transfer');
//            header('Content-Type: application/octet-stream');
//            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
//            header('Expires: 0');
//            header('Cache-Control: must-revalidate');
//            header('Pragma: public');
//            header('Content-Length: ' . filesize($file));
//            readfile($file);
//            exit;
//        }
//        $file = "base_url().'/temporer_print_report/form_exportir_'.$id.'.docx";
//        $file = base_url().'/temporer_print_report/form_exportir_'.$id.'.docx';
//        echo $file;
//// First, you need to set the headers, so that
//// the browser knows to expect a CSV file download.
//        header("Content-Disposition: attachment; filename=" . basename($file));
//        header("Content-Type: text/docx");
//        header("Content-Length: " . filesize($file));
//// You can also set Cache headers, to minimize the
//// risk of the browser using old versions of the data.
//        header("Pragma: no-cache");
//        header("Expires: 0");
//        header("Cache-Control: must-revalidate");
//// And then you just print out the file data for
//// the browser to open or save.
//        readfile($file);
        return;
    }

    function save_file() {
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            return false;
        } else {
            return true;
        }
    }

}
