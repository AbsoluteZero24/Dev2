<div class="col-md-12">
    <table >
        <thead>
            <tr>
                <th class="hidden-xs">No</th>
                <th width="100">Tgl<br>Mulai</th>
                <th width="100">Tgl<br>Selesai</th>
                <th >Kegiatan</th>
                <th class="hidden-xs">PIC</th>
                <th >Lokasi</th>
                <th >Jenis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($data as $r) {
                ?>
                <tr>
                    <td class="hidden-xs"><?php echo $i ?></td>
                    <td><?php echo format_date($r['tgl_mulai']) . ' ' . format_date($r['jam_mulai'], "H:i") ?><br></td>
                    <td><?php echo format_date($r['tgl_selesai']) . ' ' . format_date($r['jam_selesai'], "H:i") ?></td>
                    <td><h5><?php echo $r['nm_kegiatan'] ?></h5></td>
                    <td class="hidden-xs"><?php echo $r['nm_pegawai'] ?></td>
                    <td class="hidden-xs"><?php echo $r['lokasi'] ?></td>
                    <td class="hidden-xs"><?php echo $r['nm_jns_kegiatan'] ?></td>
                </tr>
                <?php
                $i++;
            }
            ?>

        </tbody>
    </table>
</div>
