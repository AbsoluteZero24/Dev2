

<div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
    <a class="green <?php echo $vrh['sts_register'] ?> " href="<?php echo site_url() . "/" . $form . "/set_register/" . $vrh['vr_submit_no']; ?>">
        <button style="height:30px" class="btn btn-primary btn_space btn-sm" >
            <i class="ace-icon fa fa-cogs bigger-130">

            </i>
            Register 
        </button>
    </a>
    <a class="green" href="<?php echo site_url() . "/" . $form . "/modify_import/" . $vrh['vr_submit_no']; ?>">
        <button style="height:30px" class="btn btn-primary btn-sm" >
            <i class="ace-icon fa fa-pencil bigger-130 "></i>  Edit
        </button>
    </a>
    <button style="height:30px"type="button" class="btn btn-primary btn-sm hidden " onclick="proses_vr('<?php echo $vrh['vr_submit_no']; ?>')">
        <i class="ace-icon fa fa-refresh bigger-130"></i>
    </button>
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="height:30px" >
            <i class="ace-icon fa fa-file-pdf-o "></i>
            <span>VR </span><span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" id="export-menu">
            <li><a href="<?php echo site_url() . '/' . $form . '/preview_vr/' . $vrh['vr_submit_no']; ?>" target='_blank'>Preview</a></li>
            <li><a href="<?php echo site_url() . '/' . $form . '/print_vr_to_pdf/' . $vrh['vr_submit_no']; ?>" target='_blank'>PDF Pre</a></li>
            <li><a href="<?php echo site_url() . '/' . $form . '/print_vr_post_to_pdf/' . $vrh['vr_submit_no']; ?>" target='_blank'>PDF Post</a></li>                                        
            <li><a href="<?php echo site_url() . '/' . $form . '/download_vr/' . $vrh['vr_submit_no']; ?>">Download</a></li>
            <li><a href="<?php echo site_url() . '/' . $form . '/email_vr/' . $vrh['vr_submit_no']; ?>">Email</a></li>
        </ul>
    </div>

<!--<a class="green hidden" href="<?php echo base_url() . $p->path . $p->file_01 ?>">

    <button style="height:30px"<?php echo $p->sts_file_01 ?> type="button" class="btn btn-default btn-sm" > 
        <i class="ace-icon fa fa-file-word-o text-success bolder"></i>
    </button>
</a>

<a class="green hidden" href="<?php echo base_url() . $p->path . '/' . $p->file_02 ?>" target="_blank">
    <button style="height:30px"<?php echo $p->sts_file_02 ?>  type="button" class="btn btn-default btn-sm" > 
        <i class="ace-icon fa fa-file-pdf-o text-danger"></i>
    </button>
</a>-->

    <?php $this->load->view('form_view'); ?>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 " style="padding-left:5; padding-right:5;">
    
    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo $back_button ?>'">Back</button>
</div>



<script>
    function proses_vr(vr_submit_no)
    {
        $.ajax({
            url: "<?php echo site_url() . '/' . $form . '/print_vr/' ?>",
            type: "POST",
            data: {vr_submit_no: vr_submit_no},
            success: function (data)
            {
                alert('Success, file created');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
</script>