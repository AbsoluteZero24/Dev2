<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$config['site_title'] = 'e-panel DPS';
$config['client_name'] = 'PT. Surveyor Indonesia';
$config['client_logo'] = 'logoSI.png';
$config['favicon'] = 'images/favicon.png';
$config['google_verification'] = '';

$config['upload_path'] = 'uploads/';
$config['allowed_types'] = 'gif|jpg|png|pdf';
$config['max_size'] = '1000';
$config['max_width'] = '1024';
$config['max_height'] = '768';

$config['report_footer'] = '';
$config['app_dir'] = 'monefv';
$config['path_full'] = $_SERVER["DOCUMENT_ROOT"].'/'.$config['app_dir']; //no tail

