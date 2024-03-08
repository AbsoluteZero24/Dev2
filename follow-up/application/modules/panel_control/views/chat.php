<div class="panel-heading">Chat</div>
<div class="panel-body" style='padding:3px'>
<!--    <div class="input-group input-group-sm">
        
        <span class="input-group-btn">
            <button class="btn btn-primary btn-flat" onclick="return view_list();"><span style="height:30px" class="glyphicon glyphicon-search"></span></button>
            <a class="green" href="javascript:;" onclick="return view_quota();"  id='a-check'>
            </a>

        </span>
    </div>				-->

    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_percakapan" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
        <thead>
            <tr>
                <th width="100">DateTime</th>
                <th >Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($chat as $p) {
                if ($p['jenis'] == 'in') {
                    $align = 'right';
                    $backgroundcolor = '#FF0000';
                    $backgroundcolor = 'yellowgreen';
                } else {
                    $align = 'left';
                    $backgroundcolor = '#00FF00';
                    $backgroundcolor = 'lightgrey';
                }
                ?>
                <tr >
                    <td style='padding:0px;background-color:<?php echo $backgroundcolor ?>'><small><?php echo $p['tanggal']; ?></small></td>
                    <td style='padding:0px;text-align:<?php echo $align ?>;background-color:<?php echo $backgroundcolor ?>'><?php echo $p['pesan']; ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div> 
