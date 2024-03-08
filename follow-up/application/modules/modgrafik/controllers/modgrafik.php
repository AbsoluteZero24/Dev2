<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class modgrafik extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('pdf'));
        $this->load->helper(array('url', 'form'));
        $this->template = 'template';
        $this->load->model(array(
            'tbl_cabang_model',
        ));
        $this->form = 'modgrafik';
    }

    function index($type = '') {
        $data['form'] = $this->form;
        $data['data_row'] = ['nama' => 'saya', 'alamat' => 'jakarta'];
        $data['data_detail'] =
                [
                    '1'=>['nama' => 'saya','alamat' => 'jakarta'],
                    '2'=>['nama' => 'saya 2','alamat' => 'jakarta barat']
                ];
        $data['data_cabang'] = $this->tbl_cabang_model->as_array()->get_all();
        show('page_laporan', $data, $this->template);
    }

    function rpt1() {
        $filename = 'nama_file_laporan';
        $format = "page_laporan"; //nama file php yang berisi format laporan
        $pdfFilePath = FCPATH . $this->config->item('report_path') . "$filename.pdf";
        //sumber data
        $data['data_cabang'] = $this->tbl_cabang_model->as_array()->get_all(); //isi dari pdf

        if (file_exists($pdfFilePath) == TRUE) {
            unlink($pdfFilePath);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 
            

            //generate laporan
            $html = $this->load->view($format, $data, true); // render the view into HTML                
            $pdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,10,10,6,3');
            $pdf->allow_output_buffering = true;
            // menampilkan draft
            $pdf->SetWatermarkText('DRAFT');
            $pdf->watermark_font = 'Tahoma';
            $pdf->showWatermarkText = true;

            $pdf->WriteHTML($html); // write the HTML into the PDF
            //preview
            $pdf->Output(); // save to file because we can
            //download file
            //$pdf->Output($pdfFilePath, 'D'); // save to file because we can
        }
    }

    function download() {
        $filename = 'nama_file_laporan';
        $format = "page_laporan"; //nama file php yang berisi format laporan
        $pdfFilePath = FCPATH . $this->config->item('report_path') . "$filename.pdf";
        //sumber data
        $data['data_cabang'] = $this->tbl_cabang_model->as_array()->get_all(); //isi dari pdf

        if (file_exists($pdfFilePath) == TRUE) {
            unlink($pdfFilePath);
        }
        if (file_exists($pdfFilePath) == FALSE) {
            ini_set('memory_limit', '64M'); // boost the memory limit if it's low 
            

            //generate laporan
            $html = $this->load->view($format, $data, true); // render the view into HTML                
            $pdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,10,10,6,3');
            $pdf->allow_output_buffering = true;
            // menampilkan draft
            $pdf->SetWatermarkText('DRAFT');
            $pdf->watermark_font = 'Tahoma';
            $pdf->showWatermarkText = true;

            $pdf->WriteHTML($html); // write the HTML into the PDF
            //preview
            //$pdf->Output(); // save to file because we can
            //download file
            $pdf->Output($pdfFilePath, 'D'); // save to file because we can
        }
    }

}