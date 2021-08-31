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
								<a href="#">Galeri</a>
							</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Gallery
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									responsive photo gallery using colorbox
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
										<li>
											<a href="<?php echo $baseURL; ?>images/image-1.jpg" title="Photo Title" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-1.jpg"/>
											</a>

											<div class="tags">
												<span class="label-holder">
													<span class="label label-info">breakfast</span>
												</span>

												<span class="label-holder">
													<span class="label label-danger">fruits</span>
												</span>

												<span class="label-holder">
													<span class="label label-success">toast</span>
												</span>

												<span class="label-holder">
													<span class="label label-warning arrowed-in">diet</span>
												</span>
											</div>

											<div class="tools">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="<?php echo $baseURL; ?>images/image-2.jpg" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-2.jpg" />
												<div class="text">
													<div class="inner">Sample Caption on Hover</div>
												</div>
											</a>
										</li>

										<li>
											<a href="<?php echo $baseURL; ?>images/image-3.jpg" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-3.jpg" />
												<div class="text">
													<div class="inner">Sample Caption on Hover</div>
												</div>
											</a>

											<div class="tools tools-bottom">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="<?php echo $baseURL; ?>images/image-4.jpg" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-4.jpg" />
												<div class="tags">
													<span class="label-holder">
														<span class="label label-info arrowed">fountain</span>
													</span>

													<span class="label-holder">
														<span class="label label-danger">recreation</span>
													</span>
												</div>
											</a>

											<div class="tools tools-top">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>

										<li>
											<div>
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-5.jpg" />
												<div class="text">
													<div class="inner">
														<span>Some Title!</span>

														<br />
														<a href="<?php echo $baseURL; ?>images/image-5.jpg" data-rel="colorbox">
															<i class="ace-icon fa fa-search-plus"></i>
														</a>

														<a href="#">
															<i class="ace-icon fa fa-user"></i>
														</a>

														<a href="#">
															<i class="ace-icon fa fa-share"></i>
														</a>
													</div>
												</div>
											</div>
										</li>

										<li>
											<a href="<?php echo $baseURL; ?>images/image-6.jpg" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-6.jpg" />
											</a>

											<div class="tools tools-right">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="<?php echo $baseURL; ?>images/image-1.jpg" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-1.jpg" />
											</a>

											<div class="tools">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>

										<li>
											<a href="<?php echo $baseURL; ?>images/image-2.jpg" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo $baseURL; ?>images/image-2.jpg" />
											</a>

											<div class="tools tools-top in">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->




<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>


