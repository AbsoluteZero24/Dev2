<div class="box box-body box-danger">
    <p class="category" style="font-size:40px; color: blue"><b>Divisi Perencanaan Strategis</b></p>
    <h4 class="card-title" style="font-size: 30px"><b>Jadwal Kegiatan Tgl : <?php echo date("d M Y"); ?></b></h4>
    <table class="table table-hover table-responsive">
        <thead >
        <th style="font-size: 16px; width:20px"><strong>No</strong></th>
        <th style="font-size: 16px; width:100px"><strong>Tgl.Mulai</strong></th>
        <th style="font-size: 16px; width:100px"><strong>Tgl.Selesai</strong></th>
        <th style="font-size: 16px;"><strong>Aktivitas</strong></th>
        <th style="font-size: 16px; width:50px"><strong>PIC</strong></th>
        <th style="font-size: 16px; width:50px"><strong>Tempat</strong></th>
        <th style="font-size: 16px; width:50px"><strong>Undangan</strong></th>
        <th></th>
        </thead>
        <tbody id="tbody">
            <?php
            $i = 1;
            foreach ($data as $p) {
                ?>
                <tr style="font-size: 25px">
                    <td style="font-size: 16px"><b><?php echo $i; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo format_date($p['tgl_mulai']).'<br'.$p['jam_mulai']; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo format_date($p['tgl_selesai']).'<br>'.$p['jam_selesai']; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo $p['nm_kegiatan']; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo $p['pic']; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo $p['lokasi']; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo $p['klien']; ?></b></td>
                    <td></td>
                </tr >
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>


