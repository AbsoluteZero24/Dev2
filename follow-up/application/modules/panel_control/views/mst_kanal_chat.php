<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Chat</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_chat" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
        <thead>
            <tr>
                <th width="100">id</th>
                <th >Kanal#</th>
                <th >Tanggal</th>
                <th >No.WA</th>
                <th >Pengirim</th>
                <th >Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($kanal_chat as $p) {
                ?>
                <tr >
                    <td style='padding-top:3px;'><small><?php echo $p['id']; ?></small></td>
                    <td style='padding-top:3px;'><?php echo $p['id_kanal']; ?></td>
                    <td style='padding-top:3px;'><?php echo $p['tgl_chat']; ?></td>
                    <td style='padding-top:3px;'><?php echo $p['no_wa']; ?></td>
                    <td style='padding-top:3px;'><?php echo $p['jenis']; ?></td>
                    <td style='padding-top:3px;'><?php echo $p['pesan']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Products</a>
    </div>
    <!-- /.box-footer -->
</div>
<!-- /.box -->
<script>
    $(document).ready(function () {
        $('#data_chat').dataTable();
    });

</script>

