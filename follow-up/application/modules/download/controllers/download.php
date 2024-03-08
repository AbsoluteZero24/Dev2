<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class download extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->template = 'template';
        $this->load->model('query_model');
        $this->form = 'download';
        $this->pilihan = '';
    }

    public function index() {
        $array_pilihan = array(
            "blank" => "-- Select Query --",
            "ip" => "Query Yunan SPI/SPE",
            "vr" => "Query Yunan VR",
            "recon" => "Query Yunan Recon",
            "ls" => "Query Yunan LS",
            "ls_with_quota" => "Query Yunan LS with quota",
            "sla" => "SLA Pak Andri",
            "angga" => "Query Angga",
            "angga02" => "Query Angga 2",
            "bima" => "Query Bima",
            'mapping' => "Mapping Nomor"
        );

        $data['action_download'] = site_url() . '/' . $this->form . '/csv/';
        $data['form'] = $this->form;

        $data['tahun_mulai'] = form_input('tahun_mulai', date('Y'), 'class="form-control"');
        $data['bulan_mulai'] = form_input('bulan_mulai', '', 'class="form-control"');
        $data['hari_mulai'] = form_input('hari_mulai', '', 'class="form-control"');

        $data['tahun'] = form_input('tahun', date('Y'), 'class="form-control"');
        $data['bulan'] = form_input('bulan', '', 'class="form-control"');
        $data['hari'] = form_input('hari', '', 'class="form-control"');
        $data['pilihan'] = form_dropdown("pilihan", $array_pilihan, 'blank', "class='form-control' id='pilihan' onchange='update_link()'");

        show('list_main', $data, 'template');
    }

    public function csv() {
        $post_pilihan = $this->input->post('pilihan');
        $post_tahun = $this->input->post('tahun');
        $post_bulan = $this->input->post('bulan');
        $post_hari = $this->input->post('hari');
        
        $post_start = $this->input->post('datepicker01');
        $post_end = $this->input->post('datepicker02');

        if ($post_pilihan == 'blank') {
            redirect($this->form);
        }

        $data['pilihan'] = $post_pilihan;
        $data['nm_file'] = $post_pilihan . '.xls';
        $data['table'] = 'list_csv';
        
        $date_start = (string) format_date($post_start,'Y/m/d');
        $date_end= (string) format_date($post_end,'Y/m/d');
        
        //$date_start = "'2017/01/30'";
        //$date_end = "'2020/01/30'";
        //echo $date_start;
        //die;
        //$data['query'] = $this->query_model->get_data($post_pilihan, $post_tahun, $post_bulan, $post_hari);
        $data['query'] = $this->query_model->get_data($post_pilihan,  $date_start, $date_end);

        
        show('format_excel_2', $data, 'blank');
    }

    function export_full() {
        $filter = array('no_ls' => '', 'no_order_list' => '', 'invoice_no' => '');
        $data['data'] = $this->mst_dm_model->get_all();
        $data["no"] = 1;

        $data["export"] = 1;
//show('format_excel', $data, $this->template);
        $this->load->view('format_excel_2', $data);
    }

    function ekspor() {
        $data["no"] = 1;


        $data['query'] = $this->query_model->get_data('vr', "");
        $data["export"] = 1;
        $data['table'] = 'list_csv';
//show('format_excel', $data, $this->template);
        $this->load->view('page_to_csv', $data);
    }

    public function index_recon() {
        $filter = array('year(ip_date)' => '2018', 'month(ip_date)' => 6);
        $data = $this->query_model->get_query_yunan_recon($filter);
        show('list_recon', $data, 'template');
    }

    public function index_tes() {
        $filter = array('year(ip_date)' => '2018', 'month(ip_date)' => 6);
        $data = $this->query_model->get_query_yunan_recon($filter);
        show('list_tes', $data, 'template');
    }

    public function tes() {
        echo '<br>1 daf';
        echo '<br>' . base_url() . 'third_party/PHPExcel/PHPExcel.php';

        include(APPPATH . 'third_party/PHPExcel/PHPExcel.php');
        echo '<br>2 daf';

//include  . '/var/www/html/third_party/PHPExcel/PHPExcel.php';
        echo '<br>3 daf';
// Panggil class PHPExcel nya
        $csv = new PHPExcel();
        echo '<br>4 daf';
        $csv->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A1 dengan tulisan "NO"
        $csv->setActiveSheetIndex(0)->setCellValue('B1', "NIS"); // Set kolom B1 dengan tulisan "NIS"
        $csv->setActiveSheetIndex(0)->setCellValue('C1', "NAMA"); // Set kolom C1 dengan tulisan "NAMA"
        $csv->setActiveSheetIndex(0)->setCellValue('D1', "JENIS KELAMIN"); // Set kolom D1 dengan tulisan "JENIS KELAMIN"
        $csv->setActiveSheetIndex(0)->setCellValue('E1', "ALAMAT"); // Set kolom E1 dengan tulisan "ALAMAT"
        echo '<br>5 daf';
    }

    public function export() {
// Load plugin PHPExcel nya
//include('/third_party/PHPExcel/PHPExcel.php');
//include_once APPPATH.'/third_party/PHPExcel/PHPExcel.php';
//include(APPPATH.'/third_party/PHPExcel/PHPExcel.php');
        include(APPPATH . 'third_party/PHPExcel/PHPExcel.php');

// Panggil class PHPExcel nya
        $csv = new PHPExcel();

// Settingan awal fil excel
// Buat header tabel nya pada baris ke 1
        $csv->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A1 dengan tulisan "NO"
        $csv->setActiveSheetIndex(0)->setCellValue('B1', "NIS"); // Set kolom B1 dengan tulisan "NIS"
        $csv->setActiveSheetIndex(0)->setCellValue('C1', "NAMA"); // Set kolom C1 dengan tulisan "NAMA"
        $csv->setActiveSheetIndex(0)->setCellValue('D1', "JENIS KELAMIN"); // Set kolom D1 dengan tulisan "JENIS KELAMIN"
        $csv->setActiveSheetIndex(0)->setCellValue('E1', "ALAMAT"); // Set kolom E1 dengan tulisan "ALAMAT"
// Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $query = $this->query_model->get_query_yunan_ls('');

        echo '<pre>';
        print_r($query);
        die();


        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 2
        foreach ($siswa as $data) { // Lakukan looping pada variabel siswa
            $csv->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
            $csv->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->io_number);
            $csv->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->ls_number);
            $csv->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->ls_date);
            $csv->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data->ip_no);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }
// Set judul file excel nya
        $csv->getActiveSheet(0)->setTitle("Laporan Data Transaksi");
        $csv->setActiveSheetIndex(0);
// Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Siswa.csv"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = new PHPExcel_Writer_CSV($csv);
        $write->save('php://output');
    }

    function ekspor_data($query) {
        $data['data'] = $query;
        $data["no"] = 1;

        $data["export"] = 1;
//show('format_excel', $data, $this->template);
        $this->load->view('format_excel_2', $data);
    }

}
