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
        <h3 class="box-title">Pesan Masuk di CS</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="table_pesan_masuk" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
            <thead>
                <tr>
                    <th width="100">DateTime</th>
                    <th width="100">Pengirim</th>
                    <th >Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($pesanmasuk as $m) {
                    $backgroundcolor = 'lightgrey';
                    ?>
                    <tr >
                        <td style='padding-top:3px; padding-bottom:3px'><small><?php echo $m['Tanggal']; ?></small></td>
                        <td style='padding-top:3px; padding-bottom:3px'><small><?php echo $m['Pengirim']; ?></small></td>
                        <td style='padding-top:3px; padding-bottom:3px'><?php echo $m['Pesan']; ?></td>
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
        $('#table_pesan_masuk').dataTable({
            searching: false,
        });
    });

</script>
