<?php

class query_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tables = $this->config->item('tables', 'ion_auth');
    }

    function get_list() {

//        $query = $this->db->select('a.*, b.nama nm_jns_kegiatan')
//                ->left('tbl_jns_kegiatan b','b.id=a.id_jns_kegiatan')
//                ->like($filter)
//                ->order_by('a.id','desc')
//                ->get('trx_kegiatan a');
//        return $query->result_array();

        $sql = "SELECT a.*, concat(substr(aspek_temuan,1,40),'...') judul,
                case 
                when sts_progres = 'B' then 'Belum'
                when sts_progres = 'P' then 'Proses'
                when sts_progres = 'S' then 'Selesai'
                when sts_progres = 'L' then 'Lanjut' end sts_progres_text
                
                
                from mst_temuan a 
                
                order by id";
        return $this->db->query($sql)->result_array();
    }

    function get_progres() {
        $sql = "select * from (
select unit_kerja, count(*) B,0 P, 0 S, 0 L from mst_temuan group by unit_kerja, sts_progres having sts_progres ='B'
union all
select unit_kerja, 0 B, count(*) P, 0 S, 0 L from mst_temuan group by unit_kerja, sts_progres having sts_progres ='P'
union all
select unit_kerja, 0, 0, count(*), 0 from mst_temuan group by unit_kerja, sts_progres having sts_progres ='S'
union all
select unit_kerja, 0,0,0, count(*) from mst_temuan group by unit_kerja, sts_progres having sts_progres ='L') a
order by unit_kerja 

";
        return $this->db->query($sql)->result_array();
    }
    
}
