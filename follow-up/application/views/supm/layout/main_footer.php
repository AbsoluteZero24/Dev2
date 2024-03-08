<div class="footer-section">
		<div class="container">
			<!-- Items -->
			<div class="row">
				<!-- Item 1 -->
				<div class="col-sm-2 animated" data-animation="fadeInUp" data-animation-delay="300">
					<!-- Title -->
					<h3>Alamat </h3>
					<ul>
						<?php $this->load->model('config_model');
							$alamat = $this->config_model->get(1);
						?>
						<li><?php echo $alamat->alamat; ?></li>
						<li><?php echo $alamat->kabupaten; ?></li>
						<li><?php echo $alamat->provinsi.' '.$alamat->kodepos; ?></li>
						<li>Telp : <?php echo $alamat->telp; ?></li>
						<li>Faks : <?php echo $alamat->fax; ?></li>
					</ul>
				</div>
				<div class="col-sm-4 latest-post animated" data-animation="fadeInUp" data-animation-delay="700">
					<!-- Title -->
					<h3>Website Lain</h3>
					<ul>
						<?php 
								$this->load->model('unit_kerja_model');
								$data = $this->unit_kerja_model->get_many_by(array('status'=>'1'));
								foreach($data as $dt) {
							?>
								<li><a href="<?php echo $dt->website; ?>" target="_new"><?php echo $dt->nama; ?></a></li>
								
								<?php } ?>
					</ul>
				</div>
				<div class="col-sm-3 latest-post animated" data-animation="fadeInUp" data-animation-delay="700">
					<!-- Title -->
					<h3>Tautan Lainnya</h3>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- Copy Rights Section begins-->
	<div class="copy-rights-bg">
		<div class="copy-rights-section">
			<div class="container">
				<div class="row">
					<!-- Copy Right Details -->
					<div class="col-sm-6">
						<p class="copyright-content">&copy;&nbsp;COPYRIGHT 2015.&nbsp;&nbsp;<a href="#"> &nbsp; <?php  echo $this->config->item('client_name');?> &nbsp;</a>&nbsp; All Rights Reserved.</p>
					</div>
					<!-- Copy Right Social Icons -->
					<div class="col-sm-6">						
					</div>
				</div>
			</div>
		</div>
	</div>