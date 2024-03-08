<style>
    .td
    {
        font-size:12px;
        padding-top:3px; 
        padding-bottom:3px
    }
</style>


<!-- PRODUCT LIST -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Outbox</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="table_outbox_klien" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
            <thead>
                <tr>
                    <th width="10">No. Tujuan</th>
                    <th >Pesan</th>
                    <th width="10">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($outbox_klien as $m) {
                    $backgroundcolor = 'lightgrey';
                    if ($m['Status'] == 0) {
                        $status = 'Belum Dikirim';
                    } else {
                        $status = 'Terkirim';
                    }
                    ?>
                    <tr >
                        <td style='padding-top:3px; padding-bottom:3px'><small><?php echo $m['NoTelp']; ?></small></td>
                        <td style='padding-top:3px; padding-bottom:3px'><?php echo $m['Pesan']; ?></td>
                        <td style='padding-top:3px; padding-bottom:3px'><?php echo $status; ?></td>
                    </tr>

                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.box -->


<script>
    $(document).ready(function () {
        $('#table_outbox_klien').dataTable({
            searching: false,
        });
    });

</script>
