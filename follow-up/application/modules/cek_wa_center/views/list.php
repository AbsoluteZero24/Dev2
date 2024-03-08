<div class="box box-body box-danger">
    <table class="table table-hover table-responsive">
        <thead >
        <th style="font-size: 16px; width:20px"><strong>No</strong></th>
        <th style="font-size: 16px; width:100px"><strong>Diterima</strong></th>
        <th style="font-size: 16px; width:50px"><strong>User</strong></th>
        <th style="font-size: 16px;"><strong>Message</strong></th>
        <th></th>
        </thead>
        <tbody id="tbody">
            <?php
            $i = 1;
            foreach ($data as $p) {
                ?>
                <tr style="font-size: 25px">
                    <td style="font-size: 16px"><b><?php echo $i; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo format_date($p['created_at'])?></b></td>
                    <td style="font-size: 16px"><b><?php echo $p['message']; ?></b></td>
                    <td style="font-size: 16px"><b><?php echo $p['contact']; ?></b></td>
                    <td></td>
                </tr >
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>


