<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Respon</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_respon" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
            <thead>
                <tr>
                    <th width="100">#Kanal</th>
                    <th >Petugas</th>
                    <th >Klien</th>
                    <th >Mulai</th>
                    <th >Selesai</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($kanal_respon as $p) {
                    ?>
                    <tr >
                        <td style='padding-top:3px;'><small><?php echo $p['id_kanal']; ?></small></td>
                        <td style='padding-top:3px;'><?php echo $p['no_wa_petugas']; ?></td>
                        <td style='padding-top:3px;'><?php echo $p['no_wa_klien']; ?></td>
                        <td style='padding-top:3px;'><?php echo $p['mulai']; ?></td>
                        <td style='padding-top:3px;'><?php echo $p['selesai']; ?></td>
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
        $('#data_respon').dataTable();
    });

</script>

