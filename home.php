<?php
if(!defined('OFFDIRECT')) include 'error404.php';

?>
<body class="no-skin">
<?php
	include "base_template_topnav.php";	 //akan memanggil file base_template_topnav.php sebagai header
	echo '<div class="main-container ace-save-state" id="main-container">';
	include "menu.php";	 //akan memanggil file menu.php sebagai pembuatan menu
	
?>
			
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">Dashboard</li>
			</ul><!-- /.breadcrumb -->

		</div>

		<div class="page-content">
			
			<div class="page-header">
				<h1>
					Dashboard
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						overview &amp; stats
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
				
				
					<div class="alert alert-block alert-info">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>

						<i class="ace-icon fa fa-check green"></i>

						Selamat datang
						<strong class="green">
							<b>Kelompok 7</b>
						</strong>,<br><br>
						Pemrograman WEB 1
					</div>
						
					
					<div class="widget-header widget-header-flat widget-header-small">
						<h5 class="widget-title">
							<i class="ace-icon fa fa-newspaper-o"></i>
							Kelola Halaman Web
						</h5>
						
					</div>
					<br />
					
					<div class="row">
						<div class="space-6"></div>

						<div class="col-sm-12 infobox-container">
							
							<div class="infobox infobox-red">
								<div class="infobox-icon">
									<i class="ace-icon fa fa-user"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number">30</span>
									<div class="infobox-content">Pekerja Tersedia</div>
								</div>

							</div>
							
							
							<div class="infobox infobox-blue">
								<div class="infobox-icon">
									<i class="ace-icon fa fa-users"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number">20</span>
									<div class="infobox-content">Jumlah Client</div>
								</div>	
							</div>

							
							<div class="infobox infobox-green">
								<div class="infobox-icon">
									<i class="ace-icon fa fa-user-plus"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number">200</span>
									<div class="infobox-content">Pekerja tersalurkan</div>
								</div>
							</div>
						</div><!-- /.row -->
						<br />

						<div class="hr hr32 hr-dotted"></div>
						<div class="row">
							<div class="col-xs-12">
								<div class="widget-box transparent">
									<div class="widget-header widget-header-flat">
										<h4 class="widget-title lighter">
											<i class="ace-icon fa fa-star orange"></i>
											Jumlah Pekerja
										</h4>
									</div>

									<div class="widget-body">
										<div class="widget-main no-padding">
											<table class="table table-bordered table-striped">
												<thead class="thin-border-bottom">
													<tr>
														<th>
															Nama Pekerjaan
														</th>

														<th>
															Jumlah
														</th>

														<th class="hidden-480">
															Status
														</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>Driver</td>

														<td>
															<b class="green">15 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">8 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger"> 7 Orang Belum</span>
														</td>
													</tr>

													<tr>
														<td>Security</td>

														<td>
															<b class="green">35 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">20 OrangTersalurkan</span> &nbsp;
															<span class="label label-danger">15 Orang Belum</span>
														</td>
													</tr>

													<tr>
														<td>Cleaning Service</td>

														<td>
															<b class="green">15 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">10 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger">5 Orang Belum</span>
														</td>
													</tr>

													<tr>
														<td>Desktop Programmer</td>

														<td>
															<b class="green">30 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">20 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger">10 Orang Belum</span>
														</td>
													</tr>

													<tr>
														<td>Web Programmer</td>

														<td>
															<b class="green">35 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">25 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger">10 Orang Belum</span>
														</td>
													</tr>
													<tr>
														<td>Mobile Programmer</td>

														<td>
															<b class="green">35 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">20 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger">15 Orang Belum</span>
														</td>
													</tr>
													<tr>
														<td>Sekretaris</td>

														<td>
															<b class="green">25 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">15 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger">10 Orang Belum</span>
														</td>
													</tr>
													<tr>
														<td>Call-Center Operator</td>

														<td>
															<b class="green">10 Orang</b>
														</td>

														<td class="hidden-480">
															<span class="label label-success">7 Orang Tersalurkan</span> &nbsp;
															<span class="label label-danger">3 Orang Belum</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div><!-- /.widget-box -->
							</div><!-- /.col -->

							<div class="space-18"></div>
					
						</div><!-- /.row -->
					</div><!-- /.row --><!-- col=space_6 -->
				</div><!-- col -->
			</div><!-- row --><!-- col=xs=12 -->
		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->

<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>
	

</body>    