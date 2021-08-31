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
								<i class="ace-icon fa fa-info" ></i>
								<a href="#">About US</a>
							</li>
							<li class="active">Cabang</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						
						<div class="page-header">
							<h1>
								
							</h1>
						</div><!-- /.page-header -->


					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>
