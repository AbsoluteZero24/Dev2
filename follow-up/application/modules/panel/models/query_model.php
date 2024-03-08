<?php

class query_model extends My_Model {

    function __construct() {
        parent::__construct();
    }

    function get_kegiatan_hari_ini() {


        $ssql = "SELECT
                        a.id,
                        a.nm_kegiatan,
                        a.tgl_mulai,
                        a.tgl_selesai,
                        a.jam_mulai,
                        a.jam_selesai,
                        '--' pic,
                        lokasi,
                        klien,
                        now(),
                        date(now())
                FROM
                        trx_kegiatan a
                where tgl_mulai=date(now()) or tgl_selesai=date(now()) OR (tgl_mulai>=date(now()) and tgl_selesai<=date(now()))";
        $result = $this->db->query($ssql)->result_array();

        $new = array();
        foreach ($result as $key => $row) {
            $sql2 = "SELECT a.*, b.kd_pegawai FROM trx_kegiatan_pic a left join mst_personel b on b.id=a.id_pic where id_kegiatan=" . $row['id'];
            $result2 = $this->db->query($sql2)->result_array();

            $data_pic = array();
            foreach ($result2 as $key3 => $row3) {
                $data_pic[$key3] = $row3;
            }

            $pic = '';
            foreach ($data_pic as $row2) {
                //echo $row2['kd_pegawai'].'<br>';
                if ($pic == '') {
                    $pic = $row2['kd_pegawai'];
                } else {
                    $pic .= ', ' . $row2['kd_pegawai'];
                }
            }
            $result[$key]['pic'] = $pic;
        }

        return $result;
    }

}

?>