<?php

class query_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }

    function get_pesan_masuk_cs($kanal = '') {
        $result = $this->db
                ->select('a.*')
                ->order_by('tanggal asc')
                ->get('pesanmasuk a')
                ->result_array();
        return $result;
    }

    function get_pesan_keluar_cs($kanal = '') {
        $result = $this->db
                ->select('a.*')
                ->order_by('tanggal asc')
                ->get('pesankeluar a')
                ->result_array();
        return $result;
    }

    function get_chat() {
        $ssql = "select 'in' jenis, id, tanggal, pengirim no_wa, pesan from pesanmasuk
				union all
				select 'out' jenis, id, tanggal, tujuan, pesan from pesankeluar
				order by tanggal asc";
        $result = $this->db->query($ssql)->result_array();


        return $result;
    }

    function get_outbox($kanal = '') {
        $result = $this->db
                ->select('a.*')
                ->order_by('tgl_create asc')
                ->get('outbox a')
                ->result_array();
        return $result;
    }

    function get_kanal_chat() {
        $result = $this->db
                ->select('a.*')
                ->order_by('tgl_chat asc')
                ->get('mst_kanal_chat a')
                ->result_array();
        return $result;
    }

    function get_performa_cs() {
        $ssql = "	select a.nm_cs, a.no_wa, b.jml from mst_cs a
left join (select no_wa_petugas, count(*) jml from mst_kanal_respon group by no_wa_petugas) b on b.no_wa_petugas=a.no_wa
";
        $result = $this->db->query($ssql)->result_array();
        return $result;
    }

}
