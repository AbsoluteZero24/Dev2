<style>
    div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</style>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive display" style="border-top:1px solid;border-bottom:1px solid">
    <thead>
        <tr>
            <th width="50">No</th>
            <th width="200" >Name</th>
            <th width="200" class="hidden-xs">Date</th>
            <th width="200" class="hidden-xs">Expire</th>
            <th width="30" class="hidden-xs">Aging<br>(Month)</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($ip_aktif as $p) {
            ?>
            <tr">
                <td><?php echo $i; ?></td>
                <td><?php echo $p->importer_name; ?></td>
                <td><?php echo format_date($p->ip_date); ?></td>
                <td><?php echo format_date($p->ip_expiry_date); ?></td>
                <td><?php echo $p->umur; ?></td>
                <td></td>
            </tr>

            <?php
            $i++;
        }
        ?>
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('table.display').DataTable();
    });
</script>