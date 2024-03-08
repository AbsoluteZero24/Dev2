<?php
function format_internasional($phone = '')
{
	$phone = str_replace('-', '', $phone);
	$phone = str_replace(' ', '', $phone);
	$posisi = strpos($phone, '8');
	$nomor = substr($phone, $posisi);
	$no_hp = '62' . $nomor;
	return $no_hp;
}

function format_telpon_normal($phone = '')
{
	$phone = str_replace('-', '', $phone);
	$phone = str_replace('+62', '', $phone);
	$phone = str_replace(' ', '', $phone);
	if (substr($phone, 0, 2) == '62') {
		$phone = substr($phone, 2);
	}
	if(substr($phone,0,1)!='0'){
		$phone = '0'.$phone;
	}
	return $phone;
}
