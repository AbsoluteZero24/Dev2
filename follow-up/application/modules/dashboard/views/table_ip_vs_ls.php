<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-responsive display" >
    <thead>
        <tr>
            <th width="50">No</th>
            <th width="300" >Name</th>
            <th width="300" >IP</th>
            <th class="hidden-xs">HS Code</th>
            <th class="hidden-xs">Quota</th>
            <th class="hidden-xs">Realisation</th>
            <th class="hidden-xs">Balance</th>
            <th class="hidden-xs">LS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($ip_vs_ls as $p) {
            ?>
            <tr">
                <td><?php echo $i; ?></td>
                <td><?php echo $p->importer_name; ?></td>
                <td><?php echo $p->ip_number; ?></td>
                <td><?php echo $p->hs_code; ?></td>
                <td><?php echo number_format($p->quota_qty, 3); ?></td>
                <td><?php echo number_format($p->real_qty, 3); ?></td>
                <td><?php echo number_format($p->ballance, 3); ?></td>
                <td style="color:<?php if($p->real_qty!=$p->total) { echo 'red'; } else { echo 'black'; }  ?>"><?php echo number_format($p->total, 3); ?></td>
            </tr>

            <?php
            $i++;
        }
        ?>
    </tbody>
</table>

