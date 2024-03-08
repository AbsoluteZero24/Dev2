<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lap_temuan extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('upload', 'pdf', 'zip'));
        $this->template = 'template';
        $this->load->model(array(
            'query_model',
            'reference_model'));
        $this->form = 'lap_temuan';
        $this->data_to_print='';
    }

    function index() {
        $post_filter = $this->input->post('ip_number');
        $data['action_search'] = site_url() . '/' . $this->form;
        $data['back_button'] = site_url() . '/' . $this->form;
        $data['print_button'] = site_url() . '/' . $this->form. '/laporan_pdf';
        $data['form'] = $this->form;

        $data['option_expire'] = form_dropdown('expire', array('1' => 'Semua', '2' => "Aktif", '3' => "Kadaluwarsa"), 1, "class='form-control'");
        //$data['ip_number'] = form_dropdown('ip_number', $this->reference_model->get_ip_number(), '', 'id="id_pegawai" style="width:100%" class="form-control chosen-select" required');
        $data['ip_number'] = form_input('ip_number', $post_filter, 'class="form-control" autocomplete="off"');

        $this->data_to_print= $this->query_model->get_list();
        $data['data'] = $this->data_to_print;

        show('list', $data, "template");
    }

    function laporan_pdf() {
        $mpdf = $this->pdf->load('"en-GB-x","A4-P","","",2,2,10,10,6,3');
        $data['data'] = $this->query_model->get_list();;
        $html = $this->load->view('rpt_02', $data , true); //

        ini_set('memory_limit', '64M'); // boost the memory limit if it's low 
        $mpdf->SetFooter('
				<div style="font-family:arial; font-size:8px; text-align:center; font-weight:normal; ">
					Laporan ini berlaku tanpa tanda tangan karena dihasilkan dari Aplikasi. Laporan ini diterbitkan dalam rangka memenuhi persyaratan
					yang ditetapkan oleh Pemerintah Republik Indonesia dan tidak dimaksudkan untuk membebaskan tanggung jawab importir atau eksportir
					untuk membuat pernyataan yang lengkap dan benar sesuai dengan ketentuan Kepabeanan yang berlaku
					di wilayah Negara Republik Indonesia.
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

        redirect($this->form);
    }

}
