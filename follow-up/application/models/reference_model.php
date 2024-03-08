<?php

class Reference_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tables = $this->config->item('tables', 'ion_auth');
    }

    function get_array_mata_anggaran() {
        return array(
            '811101' => 'Beban Pengobatan dan Vaksinasi',
            '811102' => 'Beban Rawat Inap di Rumah sakit',
            '811103' => 'Beban Check Up dan Laboratorium',
            '811104' => 'Beban Penggantian Pembelian Kacamata',
            '811105' => 'Beban Perawatan Gigi',
            '811199' => 'Beban Perawatan dan pengobatan lain-lain',
        );
    }

    function get_option_mata_anggaran() {
        $row = $this->get_array_mata_anggaran();
        $result = '<option value=0>Pilih Mata Anggaran</option>';
        foreach ($row as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_array_asal_pasokan() {
        return [
            '1' => 'Lahan Sendiri',
            '2' => 'Pemasok Lokal',
            '3' => 'Impor',
            '99' => 'Other(Kontak Admin)'
        ];
    }

    function get_option_asal_pasokan() {
        $bln = $this->get_array_asal_pasokan();
        $result = '<option value=0>Pilih Asal Pasokan</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_array_status() {
        return array(
            '01' => 'Sewa',
            '02' => 'Milik Sendiri',
        );
    }

    function get_option_status() {
        $bln = $this->get_array_status();
        $result = '<option value=0>Pilih Status</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_array_bulan() {
        return array(
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'Nopember',
            '12' => 'Desember'
        );
    }

    function get_array_jns_badan_usaha() {
        return array(
            '01' => 'Swasta',
            '02' => 'BUMN',
            '03' => 'BUMD',
            '04' => 'PMA',
        );
    }

    function get_array_jns_tangki() {
        return [
            '1' => 'Pendam',
            '2' => 'Darat'
        ];
    }

    function get_option_jns_tangki() {
        $bln = $this->get_array_jns_tangki();
        $result = '<option value=0>Pilih Jenis Tangki</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_array_sts_milik() {
        return [
            '1' => 'Sewa',
            '2' => 'Milik Sendiri'
        ];
    }

    function get_option_sts_milik() {
        $bln = $this->get_array_sts_milik();
        $result = '<option value=0>Pilih Status Milik</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_array_jns_transportasi() {
        return [
            '1' => 'Truk Tanki',
            '2' => 'Tongkang'
        ];
    }

    function get_option_jns_transportasi() {
        $bln = $this->get_array_jns_transportasi();
        $result = '<option value=0>Pilih Transportasi</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_option_bulan() {
        $bln = $this->get_array_bulan();
        $result = '<option value=0>Pilih Bulan</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_jam() {
        return array(
            '01' => '01',
            '02' => '02',
            '03' => '03',
            '04' => '04',
            '05' => '05',
            '06' => '06',
            '07' => '07',
            '08' => '08',
            '09' => '09',
            '10' => '10',
            '11' => '11',
            '12' => '12',
            '13' => '13',
            '14' => '14',
            '15' => '15',
            '16' => '16',
            '17' => '17',
            '18' => '18',
            '19' => '19',
            '20' => '20',
            '21' => '21',
            '22' => '22',
            '23' => '23',
            '24' => '24'
        );
    }

    function positif_negatif() {
        return array('' => '', 'negatif' => 'negatif', 'Positif' => 'Positif');
    }

    function get_tahun() {
        $oneYearOn = date('Y-m-d', strtotime('+4 year'));
        for ($thn = 2010; $thn <= $oneYearOn; $thn++) {
            $tahun[$thn] = $thn;
        }
        return $tahun;
    }

    function get_tanggal() {
        for ($tgl = 1; $tgl <= 31; $tgl++) {
            $tanggal[sprintf('%02d', $tgl)] = $tgl;
        }
        return $tanggal;
    }

    function hitung_usia($tgl_lahir) {
        $today = new DateTime();
        $birthdate = new DateTime($tgl_lahir);
        $interval = $today->diff($birthdate);
        $usia = $interval->format('%y Tahun');
        return $usia;
    }

    function get_option_id($nama_table, $value, $nama_id = 'id') {
        $databaru = "";
        $data = $this->db->where($nama_id . ' !=', 0)->get($nama_table)->result_array();
        foreach ($data as $key => $val) {
            $databaru[$val[$nama_id]] = $val[$value];
        }
        return $databaru;
    }

    function get_option_id_minify($nama_table, $value, $nama_id = 'id', $order = null, $default = '') {
        $databaru = "";
        if ($order == null) {
            $data = $this->db->where($nama_id . ' !=', 0)->order_by($value, 'ASC')->get($nama_table)->result_array();
        } else {
            $data = $this->db->where($nama_id . ' !=', 0)->order_by($order, 'ASC')->get($nama_table)->result_array();
        }
        $databaru[''] = ($default == '') ? humanize(' Pilih ' . $value) : $default;
        foreach ($data as $key => $val) {
            $databaru[$val[$nama_id]] = $val[$value];
        }
        $data_clean = str_replace(array("\r\n", "\r", "\n"), "", $databaru);
        return $data_clean;
    }

    function get_option_id_minify_distinct($nama_table, $value, $nama_id = 'id', $order = null) {
        $databaru = "";
        if ($order == null) {
            $data = $this->db->order_by($value, 'ASC')->distinct()->get($nama_table)->result_array();
        } else {
            $data = $this->db->order_by($order, 'ASC')->distinct()->get($nama_table)->result_array();
        }

        foreach ($data as $key => $val) {
            $databaru[$val[$nama_id]] = $val[$value];
        }
        $data_clean = str_replace(array("\r\n", "\r", "\n"), "", $databaru);
        return $data_clean;
    }

    function get_query_option($select, $value, $nama_id = 'id', $order = null) {
        $databaru = "";
        if ($order == null) {
            $_order = $value;
        } else {
            $_order = $order;
        }
        $data = $this->db->order_by($_order, 'ASC')->query($select)->result_array();

        foreach ($data as $key => $val) {

            //$databaru[$val[$nama_id]] = $val[$value];
            $databaru[$val[$nama_id]] = $val[$value];
        }
        $data_clean = str_replace(array("\r\n", "\r", "\n"), "", $databaru);
        return $data_clean;
    }

    function get_option_keluarga_terkait($nama_table, $value, $nama_id = 'id', $order = null) {
        $databaru = "";
        if ($order == null) {
            $data = $this->db->order_by($value, 'ASC')->distinct()->get($nama_table)->result_array();
        } else {
            $data = $this->db->order_by($order, 'ASC')->distinct()->get($nama_table)->result_array();
        }
        $databaru = array('-' => '-');
        foreach ($data as $key => $val) {
            $databaru[$val[$nama_id]] = $val['nama_lengkap'];
        }
        $data_clean = str_replace(array("\r\n", "\r", "\n"), "", $databaru);
        return $data_clean;
    }

    function get_satuan_with_group($group) {
        $databaru = "";
        if ($group == 'semua') :
            $data = $this->db->where(array('besaran !=' => '', 'id_satuan !=' => 0))->get('satuan')->result_array();
        else:
            $data = $this->db->where(array('besaran' => $group, 'id_satuan !=' => 0))->get('satuan')->result_array();
        endif;
        foreach ($data as $key => $val) {
            $databaru[$val['id_satuan']] = $val['satuan'];
        }
        return $databaru;
    }

    function get_mtr_poli() {
        return $this->get_option_id_minify('mtr_poli', 'poli', 'id');
    }

    function get_mtr_dokter() {
        return $this->get_option_id_minify('mtr_dokter', 'dokter', 'id');
    }

    function get_mtr_laboran() {
        return $this->get_option_id_minify('mtr_laboran', 'laboran', 'id');
    }

    function get_agama() {
        return $this->get_option_id_minify_distinct('mtr_agama', 'agama', 'id');
    }

    function get_jenis_kelamin() {
        return $this->get_option_id_minify_distinct('mtr_jenis_kelamin', 'jenis_kelamin', 'jenis_kelamin');
    }

    function get_jenis_kelamin2() {
        return $this->get_option_id_minify_distinct('mtr_jenis_kelamin', 'KelaminTua', 'id');
    }

    function get_mtr_penyakit() {
        return $this->get_option_id_minify_distinct('mtr_penyakit', 'penyakit', 'id');
    }

    function get_mtr_bulan_kode() {
        return $this->get_option_id_minify_distinct('mtr_bulan', 'bulan', 'kode', 'id');
    }

    function get_mtr_bulan() {
        return $this->get_option_id_minify_distinct('mtr_bulan', 'bulan', 'id', 'id');
    }

    function get_pasien() {
        return $this->get_option_id_minify('pasien_data', 'nama_lengkap', 'id_pasien', 'nama_lengkap');
    }

    function get_keluarga_terkait() {
        return $this->get_option_keluarga_terkait('pasien_data', 'nama_lengkap', 'id_pasien', 'nama_lengkap');
    }

    function get_golongan_darah() {
        return $this->get_option_id_minify_distinct('mtr_golongan_darah', 'golongan_darah', 'golongan_darah', '');
    }

    function get_program_studi() {
        return $this->get_option_id_minify_distinct('mtr_program_studi', 'NamaPS', 'id', '');
    }

    function get_program_studi_sla() {
        return $this->get_option_id_minify_distinct('mtr_program_studi_sla', 'program_studi', 'id', '');
    }

    function get_instansi_didik() {
        return $this->get_option_id_minify_distinct('mtr_instansididik', 'InstansiDidik', 'id', '');
    }

    function get_rayon() {
        return $this->get_option_id_minify_distinct('mtr_rayon', 'rayon', 'id', '');
    }

    function get_asal_sekolah() {
        return $this->get_option_id_minify_distinct('mtr_asal_sekolah', 'asal_sekolah', 'id', '');
    }

    //smd
    function get_shipper() {
        return array(NULL => '-- Pilih Shipper --') +
                $this->get_option_id_minify_distinct('mst_shipper', 'nama', 'id', '');
    }

    function get_client() {
        return array(NULL => '-- Pilih Client --') +
                $this->get_option_id_minify_distinct('mst_client', 'nama', 'id', '');
    }

    function get_order() {
        return array(NULL => '-- Pilih Order --') +
                $this->get_option_id_minify_distinct('mst_order', 'no_order', 'id', '');
    }

    function get_cuaca() {
        return array(NULL => '-- Pilih Cuaca --') +
                $this->get_option_id_minify_distinct('tbl_cuaca', 'nama', 'id', '');
    }

    function get_prepared() {
        return array(NULL => '-- Pilih --') +
                $this->get_option_id_minify_distinct('tbl_prepared', 'nama', 'id', '');
    }

    function get_surveyor() {
        return array(NULL => '-- Pilih Surveyor --') +
                $this->get_option_id_minify_distinct('tbl_surveyor', 'nama', 'id', '');
    }

    function get_propinsi() {
        return array(NULL => '-- Pilih Propinsi --') +
                $this->get_option_id_minify_distinct('tbl_propinsi', 'nama', 'id', '');
    }

    function get_option_barge() {
        $row = $this->db->order_by('nama', 'ASC')->distinct()->get('mst_barge')->result_array();

        $result = '<option value=0> Pilih Barge</option>';
        foreach ($row as $key => $value) {
            echo $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return($result);
    }

    function get_option($pilihan = '', $nama_table, $value = 'nama', $nama_id = 'id', $order = null) {
        $databaru = "";
        if ($order == null) {
            $data = $this->db->order_by($value, 'ASC')->distinct()->get($nama_table)->result_array();
        } else {
            $data = $this->db->order_by($order, 'ASC')->distinct()->get($nama_table)->result_array();
        }
        $result = '<option value=0>' . $pilihan . '</option>';
        foreach ($data as $key => $val) {
            $result .= '<option value=' . $val[$nama_id] . '>' . $val[$value] . '</option>';
        }

        //$data_clean = str_replace(array("\r\n", "\r", "\n"), "", $databaru);
        return $result;
    }

    function get_tugboat() {
        $row = $this->get_option_id_minify_distinct('mst_tugboat', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Tug Boat --');
        } else {
            return array(NULL => '-- Pilih Tug Boat --') + $row;
        }
    }

    function get_pic() {
        $row = $this->get_option_id_minify_distinct('mst_personel', 'nm_pegawai', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Personel --');
        } else {
            return array(NULL => '-- Pilih Personel --') + $row;
        }
    }
    function get_jns_kegiatan() {
        $row = $this->get_option_id_minify_distinct('tbl_jns_kegiatan', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Jenis Kegiatan --');
        } else {
            return array(NULL => '-- Pilih Jenis Kegiatan --') + $row;
        }
    }

    function get_jetty() {
        $row = $this->get_option_id_minify_distinct('mst_jetty', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Jetty --');
        } else {
            return array(NULL => '-- Pilih Jetty --') + $row;
        }
    }

    function get_port() {
        $row = $this->get_option_id_minify_distinct('mst_port', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Port --');
        } else {
            return array(NULL => '-- Pilih Port --') + $row;
        }
    }

    function get_sts_loading() {
        $row = $this->get_option_id_minify_distinct('tbl_sts_loading', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Status --');
        } else {
            return array(NULL => '-- Pilih Status --') + $row;
        }
    }

    function get_sts_order() {
        $row = $this->get_option_id_minify_distinct('tbl_sts_order', 'nama', 'id', 'id');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Status --');
        } else {
            return array(NULL => '-- Pilih Status --') + $row;
        }
    }

    function get_jns_survei() {
        return array(
            NULL => '-- Type of Survey --',
            '01' => 'Vessel Only',
            '02' => 'Barge Only',
            '03' => 'Vessel+Barge'
        );
    }

    function get_jns_obyek() {
        return array(
            NULL => '-- Jenis Obyek --',
            '01' => 'TPBBM',
            '02' => 'SPBU',
            '03' => 'Industri',
            '04' => 'BU BBN'
        );
    }

    function get_array_grup_obyek() {
        return array(
            '' => 'Semua Obyek',
            'T' => 'TPBBM',
            'B' => 'BU BBN',
            'U' => 'INDUSTRI/PENGGUNA LANGSUNG',
            'S' => 'PENGAMBILAN SAMPLE'
        );
    }

    function get_option_grup_obyek() {
        $bln = $this->get_array_grup_obyek();
        $result = '<option value=0>Pilih Grup Obyek</option>';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_jns_dokumen() {
        return array(
            NULL => '-- Type of Doc --',
            '01' => 'PKP2B',
            '02' => 'IUP OP',
            '03' => 'IUP OP KPP',
        );
    }

    function get_jns_perbaikan() {
        return array(
            '00' => '-- Jenis Perbaikan --',
            '01' => 'Perbaikan',
            '02' => 'Penambahan',
        );
    }

    function get_array_jns_produk() {
        return array(
            NULL => '-- Jenis Produk --',
            '01' => 'BIO-FUEL',
            '02' => 'BIO-SOLAR',
        );
    }

    function get_option_jns_produk() {
        $bln = $this->get_array_jns_produk();
        $result = '';
        foreach ($bln as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_jns_client() {
        $row = $this->get_option_id_minify_distinct('tbl_jns_client', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Jenis Client --');
        } else {
            return array(NULL => '-- Pilih Jenis Client --') + $row;
        }
    }

    function get_importir() {
        $row = $this->get_option_id_minify_distinct('mst_importir', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Importir--');
        } else {
            return array(NULL => '-- Pilih Importir --') + $row;
        }
    }

    function get_agent() {
        $row = $this->get_option_id_minify_distinct('mst_agent', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Agent --');
        } else {
            return array(NULL => '-- Pilih Agent --') + $row;
        }
    }

    function get_jns_job() {
        return array(
            '00' => '-- Type of Job--',
            '01' => 'Superintending',
            '02' => 'Witnessing',
        );
    }

    function get_status() {
        return array(
            '00' => '-- Status --',
            '01' => 'Submit',
            '02' => 'Dikerjakan',
            '03' => 'Ditunda',
            '04' => 'Pertanyaan',
            '05' => 'Selesai',
        );
    }

    /* USER & GROUP */

    // $table = $this->tables['places']	
    function get_groups() {
        return $this->get_option_id_minify($this->tables['groups'], 'description', 'id');
    }

    function get_places() {
        return $this->get_option_id_minify($this->tables['places'], 'description', 'id');
    }

    function get_modules() {
        return $this->get_option_id_minify($this->tables['modules'], 'description', 'id');
    }

    function get_dokumen() {
        //$this->get_option_id_minify('mtr_dokter', 'dokter', 'id');
        $row = $this->get_option_id_minify('mst_dokumen', 'invoice_no', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Dokumen --');
        } else {
            return array(NULL => '-- Pilih Dokumen --') + $row;
        }
    }

    function get_sts_karyawan() {
        //$this->get_option_id_minify('mtr_dokter', 'dokter', 'id');
        $row = $this->get_option_id_minify('tbl_sts_karyawan', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Status --');
        } else {
            return array(NULL => '-- Pilih Status --') + $row;
        }
    }

    function get_lokasi_survei() {
        $row = $this->get_option_id_minify('tbl_lokasi_survei', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Tempat Pemeriksaan --');
        } else {
            return array(NULL => '-- Pilih Tempat Pemeriksaan --') + $row;
        }
    }

    function get_dokumen2($id_order = '') {
        $databaru = "";
        $order = "invoice_no";
        $value = "invoice_no";
        if ($order == null) {
            $data = $this->db->where('id_order', $id_order)->order_by($value, 'ASC')->get('mst_dokumen')->result_array();
        } else {
            $data = $this->db->where('id_order', $id_order)->order_by($order, 'ASC')->get('mst_dokumen')->result_array();
        }

        foreach ($data as $key => $val) {

            //$databaru[$val[$nama_id]] = $val[$value];
            $databaru[$val[$nama_id]] = $val[$value];
        }
        $data_clean = str_replace(array("\r\n", "\r", "\n"), "", $databaru);

        return $data_clean;
    }

    function get_pelabuhan_tujuan() {
        $row = $this->get_option_id_minify_distinct('tbl_pelabuhan_tujuan', 'nama', 'id', '');

        if (count($row) < 1) {
            return array(NULL => '-- Pilih Pelabuhan Tujuan --');
        } else {
            return array(NULL => '-- Pilih Pelabuhan Tujuan --') + $row;
        }
    }

    function get_unit_kerja() {
        $row = $this->get_option_id_minify_distinct('vw_tbl_unit_kerja', 'title', 'code', '');

        if (count($row) < 1) {
            return array(NULL => '-- Tidak ada Unit Kerja --');
        } else {
            return array(NULL => '-- Pilih Unit Kerja --') + $row;
        }
    }

    function get_array_unit_kerja_aktif() {
        $row = $this->get_option_id_minify_distinct('vw_unit_kerja_aktif', 'unit', 'unit', '');

        return $row;
    }

    function get_jabatan() {
        $row = $this->get_option_id_minify_distinct('vw_tbl_jabatan', 'name', 'code', '');

        if (count($row) < 1) {
            return array(NULL => '-- Tidak ada Jabatan --');
        } else {
            return array(NULL => '-- Pilih Jabatan --') + $row;
        }
    }

    function get_lamakerja() {
        $row = $this->get_option_id_minify_distinct('vw_tbl_lamakerja', 'title', 'code', '');

        if (count($row) < 1) {
            return array(NULL => '-- Tidak ada Lama Kerja --');
        } else {
            return array(NULL => '-- Pilih Lama Kerja --') + $row;
        }
    }

    function get_jenkel() {
        return array(
            '' => '-- Semua Jenis Kelamin --',
            'F' => 'Wanita',
            'M' => 'Pria',
        );
    }

    function get_keluarga($id = '') {
        $rowx = $this->get_query_option("
            select 0 id, nama, 0 id_sts_keluarga from ptsi_mst_pegawai where id = " . $id . "  
                UNION ALL
                SELECT id, nama, id_sts_keluarga
            FROM ptsi_mst_keluarga where id_pegawai = " . $id . "  ORDER BY id_sts_keluarga", "nama", "id");

        if (count($rowx) < 1) {
            return array(NULL => 'Karyawan');
        } else {

            return $rowx;
        }
    }

    function get_option_keluarga($id) {
        $row = $this->get_keluarga($id);
        $result = '<option value=0>Pilih Anggota Keluarga</option>';
        foreach ($row as $key => $value) {
            $result .= '<option value=' . $key . '>' . $value . '</option>';
        }
        return ($result);
    }

    function get_pegawai($id = '') {
        $rowx = $this->get_query_option("
            SELECT * 
            FROM mst_pegawai order by nama", "nama", "id");

        if (count($rowx) < 1) {
            return array(NULL => 'Pegawai');
        } else {
            $rowx[NULL] = 'Pegawai';
            return $rowx;
        }
    }

    function get_mata_anggaran() {
        $rowx = $this->get_query_option("
            SELECT kode id, concat(kode,'-',nama) as nm_anggaran   
            FROM tbl_kode where grup=2 order by kode ", "nm_anggaran", "id", "kode");

        if (count($rowx) < 1) {
            return array(NULL => '');
        } else {
            return $rowx;
        }
    }

    function get_survei_barge() {
        $rowx = $this->get_query_option("
            SELECT
                a.id,
                a.id_barge,
                concat(c.no_order,' / ',b.nama) nm_barge
            FROM
        	trx_barge a
            LEFT JOIN mst_barge b ON b.id = a.id_barge
            LEFT JOIN mst_order c ON c.id = a.id_order
                where a.id_barge is not null and b.nama is not null
            ORDER BY
                c.no_order,b.nama", 'nm_barge', 'id', "id");

        if (count($rowx) < 1) {
            return array(NULL => '-- Pilih Survei Barge --');
        } else {
            return array(NULL => '-- Pilih Survei Barge --') + $rowx;
        }
    }

    function retrieve_data($nm_table, $key = '', $value = '', $field = array()) {
        $this->db->select(field);
        $this->db->from($nm_table);
        $this->db->where($key, $value);
        $query = $this->db->get();

        if (empty($query))
            return '';

//        if(is_array($field)) $nm_field = explode ($delimiter, $string)

        foreach ($fields as $key) {
            if (!isset($data[$key])) {
                if (empty($header->$key) || is_null($header->$key)) {
                    $data[$key] = $key; //sementara saja, aslinya kosongkan saja
                } else {
                    if (strpos($key, 'tgl', 0) !== false) {
                        $data[$key] = date('d-m-Y', strtotime($header->$key));
                    } else {
                        $data[$key] = $header->$key;
                    }
                }
            }
        }
        return($data);
    }

    function get_name($nama_table, $value, $primary_key = 'id') {
        if ($value == '') {
            return '';
        }
        $data = $this->db->where($primary_key . ' = ', $value)->get($nama_table)->result_array();
        if (count($data) == 0) {
            $result = '';
        } else {
            $result = $data[0]['nama'];
        }
        return $result;
    }

}
