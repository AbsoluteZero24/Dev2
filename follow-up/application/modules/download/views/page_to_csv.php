<?php

header('Content-type: application/ms-excel');
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");

$view = $this->load->view($table, $query);
