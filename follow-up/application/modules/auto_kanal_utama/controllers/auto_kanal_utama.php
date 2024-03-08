<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auto_kanal_utama extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(['clog', 'cstatus_pesan', 'ctime', 'cdurasi', 'cdate', 'cpesan']);
        $this->load->helper('url');
        $this->load->model([
            'query_model',
            'vptidatabase_model',
            'setting_model',
            'servicedesk_model',
            'serverwa_model',
            'cc/mst_cs_model',
            'cc/mst_kanal_model',
            'cc/mst_kanal_respon_model',
            'cc/mst_kanal_chat_model',
            'outbox_model',
            'mst_kanal_status_model'
        ]);

        $this->query_model->database('wa_kanal_utama');
        $this->serverwa_model->database('wa_kanal_utama');
        $this->vptidatabase_model->database('vpti');

        $this->mst_cs_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_respon_model->_database = $this->load->database('wa_kanal_utama', TRUE);
        $this->mst_kanal_chat_model->_database = $this->load->database('wa_kanal_utama', TRUE);


        $this->cstatus_pesan->database('wa_kanal_utama');
        $this->cstatus_pesan->table = 'pesanmasuk_status';
//
        $this->clog->database('wa_kanal_utama');
        $this->clog->table = 'pesanmasuk_logs';
        $this->clog->layanan = 'kanal';

//        $this->wacenter01 = $this->load->database('wa_kanal_01', TRUE);
//        $this->wacenter02 = $this->load->database('wa_kanal_02', TRUE);
//        $this->wacenter03 = $this->load->database('wa_kanal_03', TRUE);
//        $this->wacenter04 = $this->load->database('wa_kanal_utama_04', TRUE);
//        $this->wacenter05 = $this->load->database('wa_kanal_utama_05', TRUE);
//demo
//$this->clog->clear_log();
//$this->cstatus_pesan->clear_log();
    }

    function test_send_message() {
        $data_klien = 'Data Klien awal ';

        // meminta respon petugas
        $pesan = $data_klien . PHP_EOL .
                '---------------------------' . PHP_EOL .
                'selamat siang, sy mau nanya';
        $pesan7 = '<MENU;' . $pesan . ';
                    Tolak.tolak;
                    Terima.terima;
                    Forward ke Atasan.ForwardKeAtasan;
                    Forward ke ODN.#ForwardKeODN;
                    Forward ke OLN.#ForwardKeOLN;
                    Close Chat.closechat>';
        $this->outbox_model->_database = $this->load->database('wa_kanal_01', TRUE);
        $result = $this->outbox_model->insert(['NoTelp' => '62895360007581',
            'Pesan' => $pesan7,
            'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
            'Status' => 0
        ]);
    }

    function mencari_petugas($no_wa_klien = '') {
// pencarian sederhana
        //logic_mencari_petugas
        $petugas = $this->query_model->mencari_petugas();

        //save log
        $this->clog->proses = 'mencari petugas yang standby';
        $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($petugas));
        $this->clog->save();

        return $petugas;
    }

    function mencari_kanal($no_wa_klien = '') {
        // pencarian sederhana
        $kanal = $this->query_model->mencari_kanal();

        // save log
        $this->clog->proses = 'mencari kanal kosong';
        $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal));
        $this->clog->save();

        return $kanal;
    }

    function index($static_noformulir = '') {
        echo 'start';
        $data_inbox = $this->serverwa_model->read_inbox('');

        foreach ($data_inbox as $inbox) {
// setting up
            $inbox['NoFormulir'] = $inbox['id'];
            $inbox['NoTelp'] = $inbox['Pengirim'];

            $this->serverwa_model->inbox = $inbox;
            $this->cstatus_pesan->inbox = $inbox;
            $this->clog->inbox($inbox);


            //$dateObj = DateTime::createFromFormat('d-m-Y h:i:s', $inbox['Tanggal']);
            //$this->tgl_chat=$dateObj->format('Y/m/d h:i:s');


            $this->cstatus_pesan->update_status('START', '');
            $this->clog->proses = 'START';
            $this->clog->save();

            $this->clog->proses = 'baca inbox';
            $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($inbox));
            $this->clog->save();

// cek sudah ada di master kanal apa belum
            $mst_kanal = $this->mst_kanal_model->as_array()->get_by('no_wa_klien', $inbox['NoTelp']);
            $this->clog->proses = 'mengecek di master kanal apakah klien';
            $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($mst_kanal));
            $this->clog->save();

            if (empty($mst_kanal)) { // keluhan baru
                $jenis = 'K';

                // cek valid importer
                $importer = $this->vptidatabase_model->get_importer($inbox['NoTelp']);
                if (empty($importer)) {
                    // berarti importer ilegal
                }

                // cari kanal yang kosong dan rotasi
                $mst_kanal = $this->mencari_kanal();

                // --- mencari petugas jaga
                $petugas_siap = $this->mencari_petugas();
                if (empty($petugas_siap)) {
                    // tidak ada petugas yang siap
                }

                // catat di master kanal
                $update_kanal['no_wa_klien'] = $inbox['NoTelp'];
                $update_kanal['no_wa_petugas'] = $petugas_siap['no_wa'];
                $update_kanal['sts_online'] = 1;
                $update_kanal['sts_proses'] = 'PERTAMA';
                $this->mst_kanal_model->update($mst_kanal['kanal'], $update_kanal);
                $mst_kanal = $this->mst_kanal_model->as_array()->get_by('kanal', $mst_kanal['kanal']); // 3 dummy
                $this->clog->proses = 'menyimpan di master kanal';
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($mst_kanal));
                $this->clog->save();

                // catat di master kanal respon
                $insert_respon['id_kanal'] = $mst_kanal['kanal'];
                $insert_respon['no_wa_server'] = $mst_kanal['no_wa'];
                $insert_respon['no_wa_klien'] = $mst_kanal['no_wa_klien'];
                $insert_respon['no_wa_petugas'] = $mst_kanal['no_wa_petugas'];
                $insert_respon['mulai'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $id_result = $this->mst_kanal_respon_model->insert($insert_respon);
                $kanal_respon = $this->mst_kanal_respon_model->as_array()->get($id_result);

                $this->clog->proses = 'menyimpan di master kanal respon';
                $this->clog->source = $id_result;
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_respon));
                $this->clog->save();

                // catat di kanal chat
                $insert_chat['id_respon'] = $kanal_respon['id'];
                $insert_chat['id_kanal'] = $kanal_respon['id_kanal'];
                $insert_chat['tgl_chat'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $insert_chat['no_server'] = $mst_kanal['no_wa'];
                $insert_chat['no_wa'] = $mst_kanal['no_wa_klien'];
                $insert_chat['jenis'] = $jenis; // ditentukan otomatis
                $insert_chat['pesan'] = $inbox['Pesan'];
                $id_result = $this->mst_kanal_chat_model->insert($insert_chat);

                $kanal_chat = $this->mst_kanal_chat_model->get($id_result);
                $this->clog->proses = 'menyimpan di master kanal chat';
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_chat));
                $this->clog->save();

                // mengirim balik ke klien, untuk menunggu
                $this->clog->proses = 'start - mengirim message menunggu';
                $this->clog->save();

                $pesan = $this->cpesan->pesan('sambutan');
                $this->outbox_model->_database = $this->load->database('wa_kanal_utama', TRUE);

                // catat di kanal chat
                $insert_chat['id_respon'] = $kanal_respon['id'];
                $insert_chat['id_kanal'] = $kanal_respon['id_kanal'];
                $insert_chat['tgl_chat'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $insert_chat['no_server'] = $mst_kanal['no_wa'];
                $insert_chat['no_wa'] = $mst_kanal['no_wa_klien'];
                $insert_chat['jenis'] = 'S'; // system auto respon
                $insert_chat['pesan'] = $inbox['Pesan'];
                $id_result = $this->mst_kanal_chat_model->insert($insert_chat);

                $kanal_chat = $this->mst_kanal_chat_model->get($id_result);
                $this->clog->proses = 'menyimpan di master kanal chat';
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_chat));
                $this->clog->save();

                $result = $this->outbox_model->insert(['NoTelp' => $inbox['NoTelp'],
                    'Pesan' => $pesan,
                    'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                    'Status' => 0
                ]);

                $this->clog->proses = 'notif ke klien untuk menunggu';
                $this->clog->deskripsi = $pesan;
                $this->clog->save();

                $data_klien = '-- Importer Info -- ' . PHP_EOL .
                        'Nama Importer : ' . $importer['importer_name'] . PHP_EOL .
                        'Nama Pengirim : ' . $importer['nm_pic'];

                // meminta respon petugas
                $pesan = $data_klien . PHP_EOL .
                        '---------------------------' . PHP_EOL .
                        $inbox['Pesan'];
                $pesan7 = '<MENU;' . $pesan . ';' . PHP_EOL .
                        'Tolak.tolak;' . PHP_EOL .
                        'Terima.terima;' . PHP_EOL .
                        '[Forward ke Atasan].ForwardKeAtasan;' . PHP_EOL .
                        '[Forward ke ODN].[ForwardKeODN];' . PHP_EOL .
                        '[Forward ke OLN].[ForwardKeOLN];' . PHP_EOL .
                        'Close Chat.closechat>';
                $this->outbox_model->_database = $this->load->database($mst_kanal['database'], TRUE);
                $result = $this->outbox_model->insert(['NoTelp' => $mst_kanal['no_wa_petugas'],
                    'Pesan' => $pesan7,
                    'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                    'Status' => 0
                ]);
                $this->clog->proses = 'meminta respon petugas';
                $this->clog->deskripsi = $pesan7;
                $this->clog->save();

                $this->cstatus_pesan->update_status('END', '');
                $this->clog->proses = 'END';
                $this->clog->save();
            } else { // chating lanjutan
                $jenis = 'K';
                $kanal_respon = $this->mst_kanal_respon_model
                        ->as_array()
                        ->get_by(['id_kanal' => $mst_kanal['kanal'],
                    'no_wa_klien' => $mst_kanal['no_wa_klien'],
                    'selesai' => null
                ]);
                $this->clog->proses = 'mencari data di master kanal respon';
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_respon));
                $this->clog->save();

                // catat di kanal chat
                $insert_chat['id_respon'] = $kanal_respon['id'];
                $insert_chat['id_kanal'] = $kanal_respon['id_kanal'];
                $insert_chat['tgl_chat'] = date('Y-m-d', now()) . ' ' . date('H:i:s', time());
                $insert_chat['no_wa'] = $mst_kanal['no_wa_klien'];
                $insert_chat['jenis'] = $jenis; // ditentukan otomatis
                $insert_chat['pesan'] = $inbox['Pesan'];
                $id_result = $this->mst_kanal_chat_model->insert($insert_chat);
                $kanal_chat = $this->mst_kanal_chat_model->get($id_result);
                $this->clog->proses = 'menyimpan di master kanal chat';
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($kanal_chat));
                $this->clog->save();

                // kirim ke petugas via server kanal
                $this->clog->proses = 'persiapan mengirim ke server cs yg diset';
                $this->clog->source = $mst_kanal['database'] . PHP_EOL . $mst_kanal['no_wa_petugas'];
                $this->clog->save();

                $pesan7 = '
<MENU;' . $inbox['Pesan'] . ';
Forward ke Atasan.ForwardKeAtasan;
Forward ke ODN.#ForwardKeODN;
Forward ke OLN.#ForwardKeOLN;
Forward ke KEU.#ForwardKeKEU;
Closing Chat.ClosingChat;
Closing Ticket.ClosingTicket>';

                // jika merupakan autorespon, ga usah dikirim ke petugas
                //
                $this->outbox_model->_database = $this->load->database($mst_kanal['database'], TRUE);
                $row_autorespon = $this->setting_model->get(strtolower($inbox['Pesan']));
                if (empty($row_autorespon)) {
//                $result = $this->outbox_model->insert(['NoTelp' => $mst_kanal['no_wa_petugas'],
//                    'Pesan' => $inbox['Pesan'],
//                    'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
//                    'Status' => 0
//                ]);
                    $result = $this->outbox_model->insert(['NoTelp' => $mst_kanal['no_wa_petugas'],
                        'Pesan' => $pesan7,
                        'tgl_create' => date('Y-m-d', now()) . ' ' . date('H:i:s', time()),
                        'Status' => 0
                    ]);
                }
                $this->outbox_model->_database = $this->load->database($mst_kanal['database'], TRUE);
                $row_result = $this->outbox_model->get($result);
                $this->clog->proses = 'mengirim pesan ke server cs';
                $this->clog->deskripsi = $pesan7;
                $this->clog->result = str_replace('","', '",' . PHP_EOL . '"', json_encode($row_result));
                $this->clog->save();

                $this->cstatus_pesan->update_status('END', '');
                $this->clog->proses = 'END';
                $this->clog->save();
            }
        }
    }

}
