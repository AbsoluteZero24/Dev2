<div class="col-lg-6 col-md-6 col-sm-12 " style="padding-left:5; padding-right:5;">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Filter</h3>
        </div>
        <div class="box-body">

            <form id="formDownload" name="formSearch" action="<?php echo $action_download ?>" role="form" method="POST">
                <label>Start Date :</label>
                <div class="input-group date col-md-6">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name='datepicker01' class="form-control pull-right" id="datepicker01" autocomplete="off">
                </div>
                <label>End Date :</label>
                <div class="input-group date col-md-6">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name='datepicker02' class="form-control pull-right" id="datepicker02" autocomplete="off">
                </div>
                <label>Query :</label>
                <div class="input-group date col-md-6">
                    <?php echo $pilihan ?>
                </div>
                <hr>
                <button style="height:30px" type="submit" class="btn btn-primary btn-sm">
                    <span style="height:30px" class="glyphicon glyphicon-download">
                    </span> Download
                </button>
            </form>
        </div>

    </div>
</div>

<script>
    $(function () {
        //Date picker
        $('#datepicker01').datepicker({
            autoclose: true
        })
        $('#datepicker02').datepicker({
            autoclose: true
        })

    })
</script>