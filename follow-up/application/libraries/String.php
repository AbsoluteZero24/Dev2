<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class String
{

    function cuplik($kalimat, $jml_kata)
    {
        $kata_baru = '';
        $kata = explode(' ', $kalimat);
        if ($jml_kata <= count($kata))
        {
            for ($i = 0; $i < $jml_kata; $i++)
            {
                $kata_baru .= ' ' . $kata[$i];
            }
        }
        else
        {
            for ($i = 0; $i < count($kata); $i++)
            {
                $kata_baru .= ' ' . $kata[$i];
            }
        }
        return $kata_baru;
    }

    function sampaititik($isi)
    {
        $pjg = strlen($isi);
        $ptg = array();
        for ($i = 0; $i <= $pjg; $i++)
        {
            $ptg[$i] = $isi[$i];
            if ($ptg[$i] == ".")
            {
                break;
            }
        }
        $ptg = implode($ptg, "");
        $ptg = "" . $ptg . "";
        return $ptg;
    }

    function smiley($pesan)
    {
        $pesan = ereg_replace(":)", "<img src='upload/emoticon/senyum.gif'>", $pesan);
        $pesan = ereg_replace(":'(", "<img src='upload/emoticon/sedih.gif'>", $pesan);
        $pesan = ereg_replace(":D", "<img src='upload/emoticon/lol.gif'>", $pesan);
        return $pesan;
    }

    function get_tanggal_indonesia($str)
    {
        $str = substr($str, 0, 10);
        $string[0] = substr($str, 0, 4);
        $string[1] = substr($str, 5, 2);
        $string[2] = substr($str, 8, 2);
        $tahun = $string[0];
        $bulan = $string[1];
        switch ($bulan)
        {
            case '01': $bulan = 'Januari';
                break;
            case '02': $bulan = 'Februari';
                break;
            case '03': $bulan = 'Maret';
                break;
            case '04': $bulan = 'April';
                break;
            case '05': $bulan = 'Mei';
                break;
            case '06': $bulan = 'Juni';
                break;
            case '07': $bulan = 'Juli';
                break;
            case '08': $bulan = 'Agustus';
                break;
            case '09': $bulan = 'September';
                break;
            case '10': $bulan = 'Oktober';
                break;
            case '11': $bulan = 'November';
                break;
            case '12': $bulan = 'Desember';
                break;
        }
        $tanggal = $string[2];
        $string = $tanggal . " " . $bulan . " " . $tahun;
        return $string;
    }

    function get_waktu($str)
    {
        $str = substr($str, 11, 5);
        return $str;
    }
	function get_bulan($str)
    {
		$bulan = substr($str, 5, 2);
		return $bulan;
	}
	function get_tanggal($str)
    {
		$tanggal = substr($str, 8, 2);
		return $tanggal;
	}
	function get_tahun($str)
    {
		$tahun = substr($str, 0, 4);
		return $tahun;
	}
}