<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cstatus_pesan extends CI_Model {

    //protected $CI;

    public $table = '';
    public $status = '';
    public $keterangan = '';
    public $inbox = [];

    function __construct() {
        parent::__construct();
    }

    public function database($database) {
        $this->db = $this->load->database($database, TRUE);
    }

    function update_status($status = '', $keterangan = '') {
        $result = $this->db
                ->select('a.*')
                ->where('a.id_pesan', $this->inbox['NoFormulir'])
                ->get($this->table . ' a')
                ->row_array();

        if (empty($result)) {
            $new['id_pesan'] = $this->inbox['NoFormulir'];
            $new['tgl_update'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
            $new['status'] = $status;
            $new['keterangan'] = $keterangan;
            $result = $this->db->insert($this->table, $new);
        } else {
            $update = ['status' => $status, 'keterangan' => $keterangan, 'tgl_update' => date(date('Y-m-d H:i:s', time()))];
            $result = $this->db->update($this->table, $update, ['noformulir' => $this->inbox['NoFormulir']]);
        }

        return $result;
    }

    function preview() {
        echo '<pre><br>' . $this->table;
        $result = $this->db
                ->select('*')
                ->get($this->table)
                ->result_array();
        print_r($result);
        echo '</pre><br>';
        return $result;
    }

    function clear_log() {
        $this->db->truncate($this->table);
    }

}
