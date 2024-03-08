<?php
//if ($export == 1) {
//We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.
//header("Content-type: application/vnd.ms-excel");
//header("Content-type: application/octet-stream");
//header("Content-type: application/csv");
    header('Content-type: application/ms-excel');
    header("Content-Disposition: attachment; filename=".$nm_file);
    header("Pragma: no-cache");
    header("Expires: 0");
//}
?>

    <?php $this->load->view($table); ?>    

