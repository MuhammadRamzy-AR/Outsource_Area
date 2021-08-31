<script type="text/javascript">
	try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo $baseURL ; ?>home">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>
		
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-info"></i>
						<span class="menu-text">
							<b>About US</b>
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					
		<ul class="submenu">
						
			
									<li class="">
										<a href="<?php echo $baseURL; ?>visi_misi/data">
											<i class="menu-icon fa fa-eye"></i>Visi & Misi Kami</a>
									</li>
									<b class="arrow"></b>
								
									<li class="">
										<a href="<?php echo $baseURL; ?>cabang/data">
											<i class="menu-icon fa fa-building"></i>Cabang</a>
									</li>
									<b class="arrow"></b>	

									<li class="">
										<a href="<?php echo $baseURL; ?>kontak/data">
											<i class="menu-icon fa fa-book"></i>Kontak</a>
									</li>
									<b class="arrow"></b>

									


									

		</ul><!-- /.nav-list -->

	<ul class="nav nav-list">
	<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-briefcase"></i>
					<span class="menu-text">
							<b>Jasa</b>
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
					
				<ul class="submenu">
						
			
						<li class="">
								<a href="<?php echo $baseURL; ?>perekrutan/data">
									<i class="menu-icon fa fa-user-plus"></i>Perekrutan</a>
						</li>
						<b class="arrow"></b>
								
							<li class="">
									<a href="<?php echo $baseURL; ?>tenaga_kerja/data">
										<i class="menu-icon fa fa-male"></i>
											<span class="menu-text">
												Tenaga Kerja 
											</span>

											
									</a>
									<b class="arrow"></b>
	
							</li>	
																					
				</li>


	</ul>

	<ul class="nav nav-list">
	<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-black-tie"></i>
					<span class="menu-text">
							<b>Data Pekerja</b>
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
					
				<ul class="submenu">
						
			
						<li class="">
								<a href="<?php echo $baseURL; ?>pekerja/datadiri">
									<i class="menu-icon fa fa-slideshare"></i>Data Diri Pekerja</a>
						</li>
						<b class="arrow"></b>
								
							<li class="">
									<a href="<?php echo $baseURL; ?>pekerja/status">
										<i class="menu-icon fa fa-street-view"></i>
											<span class="menu-text">
												Status Pekerja 
											</span>

											
									</a>
									<b class="arrow"></b>
	
							</li>	
																					
				</li>


	</ul>

	<ul class="nav nav-list">
	<li class="">
			<a href="<?php echo $baseURL; ?>client/data">
				<i class="menu-icon fa fa-group"></i>
					<span class="menu-text">
							<b>Client</b>
					</span>

					
				</a>
				<b class="arrow"></b>
		</ul>

	<ul class="nav nav-list">
	<li class="">
			<a href="<?php echo $baseURL; ?>galeri/data">
				<i class="menu-icon fa fa-photo"></i>
					<span class="menu-text">
							<b>Galeri</b>
					</span>

					
				</a>
				<b class="arrow"></b>
		</ul>

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>