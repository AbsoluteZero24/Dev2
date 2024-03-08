<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">today</i>..
            </div>
            <div class="card-content">
                <h4 class="card-title">Personel</h4>
                <div class="form-group">
                    <label class="label-control" style="color:black">Nama</label>
                    <?php echo $nm_pegawai ?>
                </div>
                <div class="form-group">
                    <label class="label-control" style="color:black">Kode</label>
                    <?php echo $kd_pegawai ?>
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

