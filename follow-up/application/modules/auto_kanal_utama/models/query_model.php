<?php

class query_model extends My_Model {

    public $inbox = [];

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }

    function mencari_kanal() {
        $ssql = 'select * from mst_kanal where sts_aktif = 1 and sts_online=0';
        $result = $this->db->query($ssql)->row_array();
        return $result;
    }

    function mencari_petugas() {
        $ssql = '
                select no_wa_petugas no_wa, sum(jml) jml from (
                select no_wa_petugas, count(*) jml from mst_kanal where sts_aktif = 1 and sts_online=1 group by no_wa_petugas
                union all 
                select no_wa, 0 jml from mst_cs where sts_aktif=1) a
                group by no_wa_petugas
                order by jml
                ';
        $result = $this->db->query($ssql)->row_array();
        return $result;
    }

    function read_inbox() {
        $result = $this->db
                ->select('a.*')
                ->where("id not in (select id_pesan from pesanmasuk_status)")
                //->where("id", "ZO000406")
                ->get('pesanmasuk a')
                ->result_array();
        return $result;
    }

    function get_nomor_layanan() {
        $this->dbx = $this->load->database('servicedesk', TRUE);

        $result = $this->dbx
                ->select('a.*')
                ->where('propname', 'counter_permohonan')
                ->limit(1)
                ->get('kso_properties a')
                ->row_array();
        return $result['propvalue'] + 1;
    }

}
