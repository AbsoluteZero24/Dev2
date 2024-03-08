<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
//include_once APPPATH.'/third_party/mpdf/mpdf.php';
include_once APPPATH.'/third_party/phpword.php';
class Word extends PHPWord{
    public function __construct() {
        parent::__construct();
    }
    
}

