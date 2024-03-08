<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Surveyor</title>
        <style>
            table { width:100%; }
        </style>
    </head>
    <body>
        <div id='content'>
            <div id='header'>
                <table width="100%" style='padding-top:100px;'>
                    <tr>
                        <td style="height: 80px; color: #00000; text-align: center; " valign="top">
                            <div style="font-family:arial; font-weight:bold;">		
                                <h5>                                    
                                    LAPORAN AKTIVITAS PEGAWAI
                                </h5>
                            </div>
                        </td>
                        <td >
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' ><hr style="margin-top:1px; margin-bottom:10px;"/></td>
                    </tr>
                </table>
            </div> 

            <table width="100%" style="font-family:arial; font-size:10px;" border=1>
                <tr style="background-color: #a0d0e0">
                    <th style="font-weight: bold" class="hidden-xs">No</th>
                    <th style="font-weight: bold" width="100">Tgl<br>Audit</th>
                    <th style="font-weight: bold" width="100">Unit<br>Kerja</th>
                    <th style="font-weight: bold">Aspek Temuan</th>
                    <th style="font-weight: bold" class="hidden-xs">Status</th>
                </tr>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data as $r) {
                        ?>
                        <tr style="height:50px; padding:1px" <?php echo "id='record" . $r['id'] . "'" ?>>
                            <td class="hidden-xs"><?php echo $i ?></td>
                            <td><?php echo $r['thn_audit'] ?><br></td>
                            <td><?php echo $r['unit_kerja'] ?><br></td>
                            <td><?php echo $r['aspek_temuan'] ?><br></td>
                            <td><?php echo $r['sts_progres'] ?><br></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </body>
</html>
