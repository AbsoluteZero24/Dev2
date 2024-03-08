
        <!-- PRODUCT LIST -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Jalur Whatsapp</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_percakapan" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
				<thead>
					<tr>
						<th width="10">#</th>
						<th >No.WA</th>
						<th >Petugas</th>
						<th >Klien</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($kanal as $k) {
						switch($k['sts_online']){
							case '0': $backgroundcolor='lightgreen'; break;
							case '1': $backgroundcolor='tomato'; break;
							case '-': $backgroundcolor='lightgrey'; break;
							default : $backgroundcolor='white';
						}
						?>
						<tr >
							<td style='background-color:<?php echo $backgroundcolor ?>'><?php echo $k['kanal']; ?></td>
							<td style='background-color:<?php echo $backgroundcolor ?>'><?php echo $k['no_wa']; ?></td>
							<td style='background-color:<?php echo $backgroundcolor ?>'><?php echo $k['no_wa_petugas']; ?></td>
							<td style='background-color:<?php echo $backgroundcolor ?>'><?php echo $k['no_wa_klien']; ?></td>
						</tr>

						<?php
						$i++;
					}
					?>
				</tbody>
			</table>
			
            <!-- /.box-body -->
            <div class="box-footer text-center">
                
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    