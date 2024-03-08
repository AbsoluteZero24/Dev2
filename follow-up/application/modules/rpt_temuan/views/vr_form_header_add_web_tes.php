
<form class="form-horizontal" role="form" action="<?php echo $action_modify_vr; ?>" method="post">
    <div class="box box-primary">
        <!--    <div class="box-header with-border">
                <h3 class="box-title">Pengajuan Pemeriksaan</h3>
            </div>-->
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="box-footer">
            Periksa kembali data yang diinput agar tidak terjadi kesalahan proses data
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
</form>