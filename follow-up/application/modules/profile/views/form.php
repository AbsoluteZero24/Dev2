<form class="form-horizontal" role="form" action="<?php echo $action_modify; ?>" method="post">
    <div class="box box-primary">
        <div class="box-body" >
            <label class="label-control" style="color:black">UserName</label>
            <?php echo $username ?>
            <label class="label-control" style="color:black">Email</label>
            <?php echo $email ?>
            <label class="label-control" style="color:black">First Name</label>
            <?php echo $first_name ?>
            <label class="label-control" style="color:black">Last Name</label>
            <?php echo $last_name ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Cancel</button>
        </div>
    </div>
</form>

