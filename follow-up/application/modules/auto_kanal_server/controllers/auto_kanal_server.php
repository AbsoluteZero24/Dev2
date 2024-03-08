<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auto_kanal_server extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(['clog', 'cstatus_pesan', 'ctime', 'cdate']);
        $this->load->helper('url');
        $this->load->model([
            'vpti_model',
            'query_model',
            'servicedesk_model',
            'serverwa_model',
            'cc/mst_cs_model',
            'cc/mst_kanal_model',
            'cc/mst_kanal_respon_model',
            'cc/mst_kanal_chat_model',
            'mst_kanal_status_model',
            'outbox_model'
        ]);

        $this->vpti_model->_database = $this->load->database('vpti', TRUE);
        $this->serverwa_model->database('wa_kanal_utama');
        $this->mst_kanal_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_respon_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_chat_model->_database = $this->load->database('wa_kanal_utama', TRUE);

        $this->kanal_default = 1;


//demo
//$this->clog->clear_log();
//$this->cstatus_pesan->clear_log();
    }

    function cek_source() {
        $db2 = $this->load->database('vpti', TRUE);
        $result = $db2
                ->select('a.*')
                ->limit(20)
                ->get('vpti_importer a')
                ->result_array();
        print_r($result);
    }

    function index($id_kanal = '1') {
        echo 'start<br>';
        if ($id_kanal == 1) {
            $this->query_model->database('wa_kanal_01');
            $this->cstatus_pesan->database('wa_kanal_01');
            $this->cstatus_pesan->table = 'pesanmasuk_status';

            $this->clog->database('wa_kanal_01');
            $this->clog->table = 'pesanmasuk_logs';
            $this->clog->layanan = 'kanal';
        }


        $data_inbox = $this->query_model->read_inbox('');

        foreach ($data_inbox as $inbox) {
// persiapan
            $inbox['NoFormulir'] = $inbox['id'];
            $inbox['NoTelp'] = $inbox['Pengirim'];

            $this->serverwa_model->inbox = $inbox;
            $this->cstatus_pesan->inbox = $inbox;
            $this->clog->inbox($inbox);

            $this->cstatus_pesan->update_status('START', '');
            $this->clog->proses = 'START';
            $this->clog->save();

            $this->clog->proses = 'baca inbox';
            $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($inbox));
            $this->clog->save();


            //--- cek sudah ada di master kanal apa belum
            // cari nomor klien di master kanal
            $mst_kanal = $this->mst_kanal_model->as_array()->get_by('kanal', $this->kanal_default);
            $this->clog->proses = 'mengecek master kanal';
            $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($mst_kanal));
            $this->clog->save();

            if (empty($mst_kanal)) {
// errror 
            }

            // cek kanal respon
            // pastikan 1 klien diterima 1 nomor kanal// identifikasi utama adalah id kanal
            $kanal_respon = $this->mst_kanal_respon_model->as_array()->get_by(['id_kanal' => $this->kanal_default, 'selesai' => null]);
            if ($kanal_respon['no_wa_petugas'] != $inbox['NoTelp']) {
                // tambah data karena petugas dioper ke petugas lain
            }
            $this->clog->proses = 'mencari data di master kanal respon';
            $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_respon));
            $this->clog->save();

            // catat chat
            $insert_chat['id_respon'] = $kanal_respon['id'];
            $insert_chat['id_kanal'] = $kanal_respon['id_kanal'];
            $insert_chat['tgl_chat'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
            $insert_chat['no_wa'] = $inbox['NoTelp'];
            $insert_chat['jenis'] = 'P'; // ditentukan otomatis
            $insert_chat['pesan'] = $inbox['Pesan'];
            $id_result = $this->mst_kanal_chat_model->insert($insert_chat);

            $kanal_chat = $this->mst_kanal_chat_model->get($id_result);
            $this->clog->proses = 'menyimpan di master kanal chat';
            $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_chat));
            $this->clog->save();

            if (strpos($inbox['Pesan'], '>') > 0 || strpos($inbox['Pesan'], '<') > 0) {
                $this->outbox_model->_database = $this->load->database($mst_kanal['database'], TRUE);
                $this->vpti_model->keyword($inbox['Pesan']);
                $hasil_pencarian = $this->vpti_model->result;

                $result = $this->outbox_model->insert([
                    'NoTelp' => $mst_kanal['no_wa_petugas'],
                    'Pesan' => $hasil_pencarian,
                    'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                    'Status' => 0
                ]);
                $row_result = $this->outbox_model->get($result);
                $this->clog->proses = 'mengirim pesan ke petugas';
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($row_result));
                $this->clog->save();
            } else {
                $this->outbox_model->_database = $this->load->database('wa_kanal_utama', TRUE);

                $this->clog->proses = 'start - proses respon balasan petugas';
                $this->clog->data = strtolower($inbox['Pesan']);
                $this->clog->save();
                switch (strtolower($inbox['Pesan'])) {
                    case 'ForwardKeODN': continue; break;
                        
                    case 'ForwardKeODN': continue; break;
                    case 'ForwardKeKEU': continue; break;
                    case 'ForwardKeIT': continue; break;
                    case 'close chat':
                        // clear kanal utama
                        $update_row['sts_online'] = '0';
                        $update_row['no_wa_petugas'] = '';
                        $update_row['no_wa_klien'] = '';
                        $this->mst_kanal_model->update($id_kanal, $update_row);

                        // clear kanal respon
                        $this->mst_kanal_respon_model->update_by(['id_kanal' => $id_kanal, 'selesai' => null], ['selesai' => date('Y-m-d', now()) . ' ' . date('H:i:s', time())]);

                        $this->outbox_model->_database = $this->load->database('wa_kanal_utama', TRUE);
                        $result = $this->outbox_model->insert([
                            'NoTelp' => $mst_kanal['no_wa_klien'],
                            'Pesan' => 'Chat telah ditutup. Terima kasih.',
                            'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                            'Status' => 0
                        ]);
                        $this->outbox_model->_database = $this->load->database('wa_kanal_01', TRUE);
                        $result = $this->outbox_model->insert([
                            'NoTelp' => $mst_kanal['no_wa_petugas'],
                            'Pesan' => 'Chat telah ditutup. Terima kasih',
                            'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                            'Status' => 0
                        ]);


                        break;
                    case 'demo':
                        $result = $this->outbox_model->insert([
                            'NoTelp' => $mst_kanal['no_wa_klien'],
                            'Pesan' => $inbox['Pesan'],
                            'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                            'Status' => 0
                        ]);
                        break;
                    default:
                        $this->outbox_model->_database = $this->load->database('wa_kanal_utama', TRUE);
                        $result = $this->outbox_model->insert([
                            'NoTelp' => $mst_kanal['no_wa_klien'],
                            'Pesan' => $inbox['Pesan'],
                            'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                            'Status' => 0
                        ]);
                        $this->clog->proses = 'forward ke klien ';
                        $this->clog->data = strtolower($inbox['Pesan']);
                        $this->clog->save();
                }
                $this->clog->proses = 'end - proses respon balasan petugas';
                $this->clog->data = strtolower($inbox['Pesan']);
                $this->clog->save();

                //$row_result = $this->outbox_model->get($result);
                //$this->clog->proses = 'mengirim pesan ke klien';
                //$this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($row_result));
                //$this->clog->save();
            }
            $this->cstatus_pesan->update_status('END', '');
            $this->clog->proses = 'END';
            $this->clog->save();
        }
    }

}
