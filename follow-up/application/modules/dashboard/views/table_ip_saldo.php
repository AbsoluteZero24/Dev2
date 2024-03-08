<style>
    div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</style>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive display" style="border-top:1px solid;border-bottom:1px solid;padding:2px">
    <thead>
        <tr>
            <th width="50">No</th>
            <th width="300" >Name</th>
            <th width="300" >IP</th>
            <th class="hidden-xs">Quota</th>
            <th class="hidden-xs">Realisation</th>
            <th class="hidden-xs">Balance</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($ip_saldo as $p) {
            ?>
            <tr">
                <td><?php echo $i; ?></td>
                <td><?php echo $p->importer_name; ?></td>
                <td><?php echo $p->ip_number; ?></td>
                <td><?php echo number_format($p->quota_qty,3); ?></td>
                <td><?php echo number_format($p->real_qty,3); ?></td>
                <td><?php echo number_format($p->ballance,3); ?></td>
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