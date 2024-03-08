<nav class="navbar navbar-default menu-bar" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Logo and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<div class="site-logo"> <img src="<?php echo base_url().'uploads/logo/'.$this->config->item('client_logo');?>" /> </div>						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"> <span class="menu-box"><span class="menu">Menu</span><i class="flaticon-list50 menu-button"></i></span> </button>
					</div>
					<!-- Collect the nav links, buttons and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo base_url();?>" class="">Home</a></li>
															
								<li class="dropdown"> 
									<a href="#" class="dropdown-toggle">Profil</a>
									<span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-2">
										<i class="fa fa-angle-down"></i>
									</span>
									
									<!-- DropDown Menu Begins -->
									<ul role="menu" class="dropdown-menu collapse-2 collapse">									
										<li><a href="#">Tentang</a></li>
										<li><a href="#">Sejarah</a></li>
										<li><a href="#">Visi & Misi</a></li>
										<li><a href="#">Struktu Organisasi</a></li>
										<li><a href="#">Pimpinan</a></li>
									</ul>
									<!-- DropDown Menu Ends -->
								</li>						
								<li class="dropdown"> 
									<a href="#" class="dropdown-toggle">Data</a>
									<span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-2">
										<i class="fa fa-angle-down"></i>
									</span>
									
									<!-- DropDown Menu Begins -->
									<ul role="menu" class="dropdown-menu collapse-2 collapse">	
										<li><a href="#">Data List</a></li>
										<li><a href="#">Data List</a></li>
									</ul>
									
								</li>						
								<li class="dropdown"> 
									<a href="#" class="dropdown-toggle">Laporan</a>
									<span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-2">
										<i class="fa fa-angle-down"></i>
									</span>
									<ul role="menu" class="dropdown-menu collapse-2 collapse">	
										<li><a href="#">Laporan 1</a></li>
										<li><a href="#">Laporan 2</a></li>
										<li><a href="#">Laporan 3</a></li>
									</ul>
									
								</li>						
								<li class="dropdown"> 
									<a href="#" class="dropdown-toggle">Informasi</a>
									<span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-2">
										<i class="fa fa-angle-down"></i>
									</span>
									
									<!-- DropDown Menu Begins -->
									<ul role="menu" class="dropdown-menu collapse-2 collapse">	
										<li><a href="#">Berita</a></li>
										<li><a href="#">Foto Kegiatan</a></li>										
									</ul>
								</li>
								
							<li><a href="#">contact</a></li>
								<li class="search"><a href="#search-toggle-right" id="search-toggle"><i class="glyphicon glyphicon-search"></i></a></li>
								<li class="search-form">
									<form role="search" class="navbar-form">
										<div class="input-group">
											<input type="text" name="q" placeholder="Search text type" class="form-control">
											<div class="input-group-btn">
												<button type="submit" class="btn btn-default">GO</button>
											</div>
										</div>
									</form>
								</li>
							</ul>
						</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>