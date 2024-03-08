
        <!-- PRODUCT LIST -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Performa CS</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="data_percakapan" style="border-top:1px solid;border-bottom:1px solid; margin-bottom:3px">
				<thead>
					<tr>
						<th >Petugas</th>
						<th >No.WA</th>
						<th >Jml Customer</th>
						<th >Durasi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($performa_cs as $k) {
						
						?>
						<tr >
							<td ><?php echo $k['nm_cs']; ?></td>
							<td ><?php echo $k['no_wa']; ?></td>
							<td ><?php echo $k['jml']; ?></td>
							<td >0 jam 0 menit</td>
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
    