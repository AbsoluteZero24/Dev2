<form class="form-horizontal" role="form" action="<?php echo $action_email; ?>" method="post">
    <div class="row">
        <div class="container col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Detail</div>
                <div class="panel-body" style="padding:2px;padding-bottom: 0px">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">From : </label>
                            <div class="col-sm-9">
                                <?php echo $from ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password : </label>
                            <div class="col-sm-9">
                                <?php echo $password ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">To : </label>
                            <div class="col-sm-9">
                                <?php echo $to ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">CC : </label>
                            <div class="col-sm-9">
                                <?php echo $cc ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Subject : </label>
                            <div class="col-sm-9">
                                <?php echo $subject ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo $back_button ?>'">Back</button>
        </div>
    </div>    

</form>

