<style>
    .first_row
    {
        border-top-style: none; 
    }
</style>

<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">

    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
                <!-- Date dd/mm/yyyy -->


                <table class="table table-hover table-no-bordered" >
                    <tr>
                        <td width='30%' style="border-top-style: none; ">Nama : </td>
                        <td style="border-top-style: none; "><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $alamat ?></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td><?php echo $kota ?></td>
                    </tr>
                    <tr>
                        <td>PIC</td>
                        <td><?php echo $pic ?></td>
                    </tr>
                    <tr>
                        <td>Telp</td>
                        <td><?php echo $telp ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $email ?></td>
                    </tr>
                </table>
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
            </div>

        </div>
        <!-- /.box -->


        <!-- /.box -->



</form>
<script>
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
            "paging": false,
            "ordering": false,
            "info": false
        });
    });
</script>