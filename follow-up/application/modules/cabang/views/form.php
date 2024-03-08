<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">Cabang KSO SCISI</i>..
            </div>
            <div class="card-content">
                <h4 class="card-title">Tambah Cabang</h4>
                <div class="form-group">
                    <label class="label-control" style="color:black">Nama Cabang</label>
                    <?php echo $nm_cabang ?>
                    <label class="label-control" style="color:black">Nama Pimpinan</label>
                    <?php echo $nm_pimpinan ?>
                    <label class="label-control" style="color:black">Nomer Kode</label>
                    <?php echo $id_kode ?>
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
