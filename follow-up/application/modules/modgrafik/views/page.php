<?php
foreach ($data_cabang as $row_cabang) {
	echo $row_cabang['id_cabang'].' - '.$row_cabang['nm_cabang'].' - '.$row_cabang['nm_pimpinan'].' - '.$row_cabang['id_kode'];
	echo '<br>';
}
?>