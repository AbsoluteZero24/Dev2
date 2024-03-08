<div class="panel panel-primary">
    <div class="panel-heading">Data Query</div>
    <div class="panel-body">
        <div class="hidden-sm hidden-xs action-buttons">
            <a href = "<?php echo site_url() . '/' . $form . '/proses_surat_medical/'; ?>"><button class = 'btn btn-success'><i class = "fa fa-refresh"> </i></button></a>
            <a href = "<?php echo base_url() . 'document/surat_medical/' . '.docx'; ?>"><button  class = 'btn btn-primary' ><i class = "fa fa-folder-o"> </i></button></a>
            Query Yunan 1
        </div>

        <div class="hidden-sm hidden-xs action-buttons">
            <a href = "<?php echo site_url() . '/' . $form . '/proses_surat_medical/'; ?>"><button class = 'btn btn-success'><i class = "fa fa-refresh"> </i></button></a>
            <a href = "<?php echo base_url() . 'document/surat_medical/' . '.docx'; ?>"><button  class = 'btn btn-primary' ><i class = "fa fa-folder-o"> </i></button></a>
            Query Yunan 2
        </div>

        <div class="hidden-sm hidden-xs action-buttons">
            <a href = "<?php echo site_url() . '/' . $form . '/proses_surat_medical/'; ?>"><button class = 'btn btn-success'><i class = "fa fa-refresh"> </i></button></a>
            <a href = "<?php echo base_url() . 'document/surat_medical/' . '.docx'; ?>"><button  class = 'btn btn-primary' ><i class = "fa fa-folder-o"> </i></button></a>
            Query Yunan 3
        </div>

        <div class="hidden-sm hidden-xs action-buttons">
            <a href = "<?php echo site_url() . '/' . $form . '/proses_surat_medical/'; ?>"><button class = 'btn btn-success'><i class = "fa fa-refresh"> </i></button></a>
            <a href = "<?php echo base_url() . 'document/surat_medical/' . '.docx'; ?>"><button  class = 'btn btn-primary' ><i class = "fa fa-folder-o"> </i></button></a>
            Query Yunan 4
        </div>

    </div>
</div>            

<script>
    function update($id) {
        var agree = confirm("Data akan diupdate?");
        if (agree) {
            objName = 'sts[' + $id + ']';
            result = document.getElementsByName(objName);
            if (result[0].checked == true)
            {
                status = 1;
            } else
            {
                status = 0;
            }
            $.post('<?php echo site_url() . '/ob_pembayaran/update/'; ?>', {id: $id, value: status}, function () {
            });
        }
    }
</script>

<script type="text/javascript">
    jQuery(function ($) {
        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function () {
                var row = this;
                if (th_checked)
                    tableTools_obj.fnSelect(row);
                else
                    tableTools_obj.fnDeselect(row);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
            var row = $(this).closest('tr').get(0);
            if (!this.checked)
                tableTools_obj.fnSelect(row);
            else
                tableTools_obj.fnDeselect($(this).closest('tr').get(0));
        });




        $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });


        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function () {
                var row = this;
                if (th_checked)
                    $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else
                    $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]', function () {
            var $row = $(this).closest('tr');
            if (this.checked)
                $row.addClass(active_class);
            else
                $row.removeClass(active_class);
        });

    })

    function set_pembayaran()
    {
        alert('set_Pembayaran');
    }
    function surat_medical_bri()
    {
        $.post('<?php echo site_url() . '/' . $form . '/proses_surat_medical/'; ?>', {id: $id}, function () {});
    }
    function bukti_bank_keluar()
    {
        alert('bukti_bank_keluar');
    }
    function deposit()
    {
        alert('deposit');
    }
    function daftar_pegawai()
    {
        alert('daftar pegawai');
    }
</script>

