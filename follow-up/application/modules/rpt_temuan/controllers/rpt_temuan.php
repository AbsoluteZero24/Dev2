<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class rpt_temuan extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('pdf'));
        $this->load->helper(array('url', 'form', 'dompdf', 'xml', 'download', 'email'));
        $this->template = 'template';

        $this->load->model(array(
            'query_model',
            'reference_model'));
        $this->form = 'rpt_temuan';
        $this->format_vr = 'vr_print';
        $this->file = 'vre_print_02';
    }


    function print_vr($vr_submit_no = '') {
        $data = $this->query_model->get_vr_to_print($vr_submit_no);
        $data['vr_submit_date'] = format_date($data['vr_submit_date'], 'd-m-Y h:mi:s');
        $data['detail'] = $this->query_model->get_vr_detil($vr_submit_no);
        $data += $this->query_model->get_vr_exporter($vr_submit_no);
        $data += $this->query_model->get_vr_importer('99', $data['importer_id']);
        //print_r($data);
        show('vr_form', $data, 'blank');
    }

    function print2_vr($id = '') {
        $filename = 'ls_' . $id . '_' . date('d-m-Y');
        $filename = 'ujicobals';
        $pdfFilePath = FCPATH . $this->config->item('report_path') . "$filename.pdf";
        if (file_exists($pdfFilePath) == TRUE) {
            unlink($pdfFilePath);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 
//$data = $this->source_ls($id);
//$data['is_hidden'] = 'hidden';
//$files = $data['file'];
            $view = $this->file;
            $data = $this->query_model->get_vr_to_print($id);
            $html = $this->load->view($view, $data, true); // render the view into HTML				 

            $pdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,10,10,6,3');
//$pdf->SetFooter(date('d-m-Y') . '|' . $this->config->item('report_footer') . '|{PAGENO}');
//$stylesheet = file_get_contents('mpdfstyletables.css');
//$pdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

            $pdf->allow_output_buffering = true;

//$pdf->SetWatermarkText('DRAFT');
            $pdf->watermark_font = 'Tahoma';
            $pdf->showWatermarkText = false;


            $pdf->WriteHTML($html); // write the HTML into the PDF
            $pdf->Output(); // save to file because we can
//$pdf->Output($pdfFilePath, 'F'); // save to file because we can
        }
    }


    function index($vr_submit_no = '991808160007') {
        //$subNo = $this->input->post('vr_submit_no');
        //if ($subNo) {
//            $this->smarty->assign("dataCompany", $this->auth);
//            $this->smarty->assign('vr_submission_no', $subNo);
//            $this->smarty->assign('vr_submission_date', $subDate);
//            $no = $this->get_no($this->auth["commodity_code"]);
//            $this->smarty->assign("no", $no);
        //$this->smarty->assign('com_code',$subDate);
        //$this->smarty->assign('dataDetail', $this->mvreq->getDataDetail($subNo));

        $data['header'] = 'header';
        $data['detail'] = 'detail';

        $html = $this->load->view('format_vr_tes', $data);
        $filename = "vr_submission_$vr_submit_no";
        $filename = "testestes";
        pdf_create($html, $filename, $stream = "false", $papersize = "legal", $orientation = "potrait");
    }

    function vr_print_new($vr_submit_no = '991808160002') {
        $view = 'laporan_temuan';
        $filename = 'ls_' . $vr_submit_no . '_' . date('d-m-Y');
        $pdfFilePath = FCPATH . $this->config->item('report_path') . "$filename.pdf";
        if (file_exists($pdfFilePath) == TRUE) {
            unlink($pdfFilePath);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            //$data['data'] = $this->query_model->get_list();
            $data['data'] = $this->query_model->get_list();
            $data['detail'] = 'aa';

            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 
            $html = $this->load->view($view, $data, true); // render the view into HTML				 

            $pdf = $this->pdf->load('"en-GB-x","A4-L","","",0,0,0,0,6,3');
            $pdf->SetFooter(date('d-m-Y') . '|' . $this->config->item('report_footer') . '|{PAGENO}');
            $pdf->WriteHTML($html); // write the HTML into the PDF
            $pdf->Output($pdfFilePath, 'F'); // save to file because we can
        }
        redirect(base_url() . $this->config->item('report_path') . $filename . '.pdf');

        //redirect('stock/berita_acara_list');
        //show('_list', $data, $this->template);
    }

    function preview_vr($vr_submit_no = '') {
        $data = $this->source_vr($vr_submit_no);
        $data['format_source'] = $this->format_vr;
        show('preview', $data, $this->template);
    }

    function print_vr_to_pdf($io_number = '') {
        $filename = 'vr_' . $io_number;
        $mpdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,2,2,6,3');
        $view = $this->format_vr;
        $html = $this->load->view($view, $this->source_vr($io_number), true); //
        $pdfFilePath = FCPATH . 'uploads/document/' . $io_number . "/" . "$filename.pdf";
        if (!file_exists(FCPATH . 'uploads/document/' . $io_number)) {
            try {
                mkdir(FCPATH . 'uploads/document/' . $io_number);
            } catch (Exception $ex) {
                die("error");
            }
        }

        if (file_exists($pdfFilePath) == TRUE) {
            unlink($pdfFilePath);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 

            $mpdf->SetHTMLFooter('
                        <div style="text-indent: 0px; margin-bottom: 20px; font-size:8; font:arial">
                            I herewith notify:<br />
                            We understand and agree to submit Performance Bond at the time or when submitting Verification Request and will settle the payment / bill before collecting or receiving LS Hard Copy
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
		');
            $mpdf->WriteHTML($html); // write the HTML into the PDF
            $mpdf->Output(); // preview
        }

        redirect($this->form);
    }

    function print_vr_post_to_pdf($io_number = '') {
        $filename = 'vr_' . $io_number;
        $mpdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,10,10,6,3');
        $view = 'vr_print';
        $html = $this->load->view($view, $this->source_vr($io_number), true); //
        $pdfFilePath = FCPATH . 'uploads/document/' . $io_number . "/" . "$filename.pdf";
        if (!file_exists(FCPATH . 'uploads/document/' . $io_number)) {
            try {
                mkdir(FCPATH . 'uploads/document/' . $io_number);
            } catch (Exception $ex) {
                die("error");
            }
        }

        if (file_exists($pdfFilePath) == TRUE) {
            unlink($pdfFilePath);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 

            $mpdf->SetHTMLFooter('
                        <div style="text-indent: 0px; margin-bottom: 20px; font-size:8; font:arial">
                            I herewith notify:<br />
                            We understand and agree to submit Performance Bond at the time or when submitting Verification Request and will settle the payment / bill before collecting or receiving LS Hard Copy
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
		');
            $mpdf->WriteHTML($html); // write the HTML into the PDF
            $mpdf->Output(); // preview
        }

        redirect($this->form);
    }

    function download_vr($vr_number = '') {
        $filename = 'vr_' . $vr_number;
        $mpdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,10,10,6,3');
        $view = $this->format_vr;
        $html = $this->load->view($view, $this->source_vr($vr_number), true); //
        $pdfFilePath = "$filename.pdf";
//        if (!file_exists(FCPATH . 'uploads/document/' . $vr_number)) {
//            try {
//                mkdir(FCPATH . 'uploads/document/' . $vr_number);
//            } catch (Exception $ex) {
//                die("error");
//            }
//        }
        if (file_exists($pdfFilePath) == TRUE) {
            $data = file_get_contents($pdfFilePath);
            $name = 'vr_' . $vr_number . '.pdf';
            force_download($name, $data);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 

            $mpdf->SetHTMLFooter('
                        <div style="text-indent: 0px; margin-bottom: 20px; font-size:8; font:courier">
                            I herewith notify:<br />
                            We understand and agree to submit Performance Bond at the time or when submitting Verification Request and will settle the payment / bill before collecting or receiving LS Hard Copy
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
		');
            $mpdf->WriteHTML($html); // write the HTML into the PDF
            $mpdf->Output($pdfFilePath, 'D'); // save to file because we can
        }

        redirect($this->form);
        return;
    }

    function email_vr($vr_submit_no = '') {
        $data['data'] = array();
        $data['back_button'] = site_url() . '/' . $this->form . '/view/' . $vr_submit_no;
        $data['action_email'] = site_url() . '/' . $this->form . '/send_vr_to_email/' . $vr_submit_no;
        $data['from'] = form_input('email[from]', '', 'class="form-control" autocomplete="off"');
        $data['password'] = form_input('email[password]', '', 'class="form-control" autocomplete="off"');
        $data['to'] = form_input('email[to]', '', 'class="form-control" autocomplete="off"');
        $data['cc'] = form_input('email[cc]', '', 'class="form-control" autocomplete="off"');
        $data['subject'] = form_input('email[subject]', '', 'class="form-control" autocomplete="off"');
        show('form_email', $data, $this->template);
    }

    public function send_vr_to_email($vr_submit_no = '') {
        $post_data = $this->input->post('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mbox.scisi.com',
            'smtp_port' => 465,
            'smtp_user' => 'notifikasi@scisi.com', // change it to yours
            'smtp_pass' => 'Sc1s1kso', // change it to yours
            'mailtype' => 'html',
            'smtp_timeout' => 100,
            'charset' => 'iso-8859-1',
            'newline' => "\r\n",
            'crlf' => "",
            'wordwrap' => FALSE
        );

        //$data = $this->source_lk($id);
        $data['header'] = '';
        $data['email_to'] = 'cyberzen27@gmail.com';
        $data['email_subject'] = 'uji coba email/test';
        //$view = 'tes_vr';
        //$message = '<!DOCTYPE html><html>' . $this->load->view($view, $data, true) . '</html>';
        //$message = $this->load->view($view, $data, true);
        $message = '<!DOCTYPE html><html>testsetesteste</html>';

        $this->email->initialize($config);
        $this->email->from('ver_migas@scisi.com'); // change it to yours
        $this->email->to($data['email_to']); // change it to yours
        //$this->email->cc($data['email_cc']); // change it to yours
        $this->email->subject($data['email_subject']);
        $this->email->message($message);

        //if ($data['is_file'] == '') {
        //foreach ($data['row_file'] as $row) {
        //$this->email->attach($row['file']);
        //}
        //}


        $this->email->send();
        return;
        if ($this->email->send()) {
            //$upd['sts_email'] = 's';
            //$this->trx_barge_model->update($id, $upd);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Email succesfully sent !!</div></div>");
            //echo "<script type='text/javascript'>alert('email sent!')</script>";
        } else {
            //echo "<script type='text/javascript'>alert('failed! please try again')</script>";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">" . $this->email->print_debugger() . " !!</div></div>");
        }
        //redirect($this->form);
    }

    public function send_vr_to_email_ok($vr_submit_no = '') {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'padang.awan219@gmail.com', // change it to yours
            'smtp_pass' => 'senommm@54321', // change it to yours
            'mailtype' => 'html',
            'smtp_timeout' => 100,
            'charset' => 'iso-8859-1',
            'newline' => "\r\n",
            'crlf' => "",
            'wordwrap' => FALSE
        );

        //$data = $this->source_lk($id);
        $data['header'] = '';
        $data['email_to'] = 'cyberzen27@gmail.com';
        $data['email_subject'] = 'uji coba email/test';
        $view = 'tes_vr';
        //$message = '<!DOCTYPE html><html>' . $this->load->view($view, $data, true) . '</html>';
        //$message = $this->load->view($view, $data, true);
        $message = '<!DOCTYPE html><html>testsetesteste</html>';

        $this->email->initialize($config);
        $this->email->from('padang.awan219@gmail.com'); // change it to yours
        $this->email->to($data['email_to']); // change it to yours
        //$this->email->cc($data['email_cc']); // change it to yours
        $this->email->subject($data['email_subject']);
        $this->email->message($message);

        //if ($data['is_file'] == '') {
        //foreach ($data['row_file'] as $row) {
        //$this->email->attach($row['file']);
        //}
        //}



        if ($this->email->send()) {
            //$upd['sts_email'] = 's';
            //$this->trx_barge_model->update($id, $upd);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Email succesfully sent !!</div></div>");
            //echo "<script type='text/javascript'>alert('email sent!')</script>";
        } else {
            //echo "<script type='text/javascript'>alert('failed! please try again')</script>";
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">" . $this->email->print_debugger() . " !!</div></div>");
        }
        //redirect($this->form);
    }

    function source_vr($vr_submit_no = '') {
        $data = $this->query_model->get_vr_to_print($vr_submit_no);
        $importer = $this->vpti_importer_model->as_array()->get($data['importer_id']);
        $data['detail'] = $this->query_model->get_vr_detil($vr_submit_no);
        $data['description'] = 'MINYAK BUMI, GAS BUMI, DAN BAHAN BAKAR LAINNYA ';

        $data['importer_type'] = $importer['importer_type'];
        $data['importer_name'] = $importer['importer_name'];


        $data['importer_contact'] = $importer['contact_name'];
        $data['importer_address'] = $importer['address1'];
        $data['importer_address1'] = $importer['address2'];
        $data['importer_city'] = $importer['city'];
        $data['importer_phone'] = $importer['phone'];
        $data['importer_fax'] = $importer['fax'];
        $data['importer_email'] = $importer['email_address'];
        $data['importer_status'] = $importer['status'];
        $data['importer_api'] = $importer['api_no'];
        $data['importer_zipcode'] = $importer['zip_code'];
        $data['npwp'] = $importer['npwp'];


        if (substr($importer['flag_imp'], 0, 1) == 'I') {
            $data['tipe_01'] = 'IMPORTER';
            $data['tipe_02'] = 'EXPORTER';
            $data['port_type_01'] = 'Port Of Loading';
            $data['port_type_02'] = 'Port Of Discharge';
            $data['ip_type'] = 'SPI';
            $data['jenis'] = 'IMPOR (VPTI) ';
            $data['layout_01'] = 'vr_print_importer';
            $data['layout_02'] = 'vr_print_eksporter';

            $data['port_code_01'] = $data['port_code_load'];
            $data['port_name_01'] = $data['port'];
            $data['port_code_02'] = $data['port_code_discharge'];
            $data['port_name_02'] = $data['port_name'];
        } else {
            $data['tipe_01'] = 'EXPORTER';
            $data['tipe_02'] = 'IMPORTER';
            $data['port_type_01'] = 'Port Of Discharge';
            $data['port_type_02'] = 'Port Of Loading';
            $data['ip_type'] = 'SPE';
            $data['jenis'] = 'EKSPOR (VPTE) ';
            $data['layout_01'] = 'vr_print_eksporter';
            $data['layout_02'] = 'vr_print_importer';

            $data['port_code_01'] = $data['port'];
            $data['port_name_01'] = $data['port_code_load'];
            $data['port_code_02'] = $data['port_name'];
            $data['port_name_02'] = $data['port_code_discharge'];
        }
        return $data;
    }

    function get_importer() {
        $importer_id = $this->input->post('importer_id');
        //$importer_id=25;
        $importer = $this->vpti_importer_model->as_array()->get($importer_id);
        $prov = $this->tbldmpropinsi_model->as_array()->get($importer['region_code']);
        $importer['prov'] = $prov['nmprop'];

        //$result = array('npwp'=>'11111111');
        //echo $importer;
        //echo json_encode($result);
        echo json_encode($importer);
        //echo 'hasil';
    }

    function get_exporter() {
        $exporter_id = $this->input->post('exporter_id');
        $exporter = $this->vpti_exporter_model->as_array()->get($exporter_id);
        echo json_encode($exporter);
    }

    function get_ip() {
        $importer_id = $this->input->post('importer_id');
        $importer_id = 43;
        $ip = $this->reference_model->get_ip_number($importer_id);
        //echo $ip;
        $result = '<option value=0>Pilih Bulan</option>';
        echo $result;
    }

    function get_port_loading() {
        $port_name = $this->input->post('port_name');
        $port_list = $this->query_model->get_port_loading($port_name);

        $echo = '<option value=0>Choose Port Name</option>';
        foreach ($port_list as $row) {
            $echo .= '<option value="' . $row->port_code . '">' . $row->port . ' | ' . $row->country . '</option>';
        }

        echo $echo;
    }

    function get_supplier() {
        $importer_id = $this->input->post('importer_id');
        $importer_id = 43;
        $supplier_list = $this->query_model->get_supplier($importer_id);

        $echo = '<option value=0>Choose Supplier</option>';
        foreach ($supplier_list as $row) {
            $echo .= '<option value=' . $row['io_number'] . '>' . $row['supplier_name'] . '</option>';
        }

        echo $echo;
    }

    function get_supplier_detail() {
        $io_number = $this->input->post('io_number');
        $io_number = 'E.99.006772';
        $data = $this->vpti_io_supplier_model->get_by('io_number', $io_number);
        echo json_encode($data);
    }

}
