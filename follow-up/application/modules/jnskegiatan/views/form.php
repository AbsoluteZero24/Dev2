<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="box box-primary">
        <div class="box-body" >
            <div class="form-group">
                <div class="col-md-12">
                    <label class="label-control" style="color:black">Nama</label>
                </div>
                <div class="col-md-12">
                    <?php echo $nama ?>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
        </div>
    </div>
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