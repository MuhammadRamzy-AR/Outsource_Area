<?php
if(!defined('OFFDIRECT')) include 'error404.php';

?>
<body class="no-skin">
<?php
	include "base_template_topnav.php";	 //akan memanggil file base_template_topnav.php sebagai header
	echo '<div class="main-container ace-save-state" id="main-container">';
	include "menu.php";	 //akan memanggil file menu.php sebagai pembuatan menu
	
?>

<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Kelompok Produk</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
							Kelompok Produk
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							Hasil untuk "Kelompok Produk"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="6%">No</th>
								<th class="center" width="85%">Kategori Berita</th>
								<th class="center" >
									<a href="#m_kategori" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>					
							<tr>
								<td align="center"></td>
								<td></td>
								<td align="center"></td>
							</tr>
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
	</div> 
</div> 		

<div class="modal fade" id="m_kategori" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Kategori Produk
				</div>
			</div>
			<div class="modal-body">
				<form name="f_kategori" id="f_kategori" action="" method="post">
					<input type="hidden" name="id" id="id" value="">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr><td style="width: 25%">Kategori Produk</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtGroupProduk" id="txtGroupProduk" required value="">
							</td>
						</tr>
					</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
					<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-minus-circle"></i> Tutup</button>
			</div>
			</form>
		</div>
	</div>
</div>



<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>

<script>
	$(document).ready(function() {
		$('#btnSimpan').click(function(){
			alert('hohohoh');
			/*if ($('#txtGroupProduk').val()=="") {
				$('#konfirmasi').html(
					'<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true>&times;</span></button>'+
					'<strong>peringatan!</strong><br>sugalahumba!!!!!!!'+'</div>' );
				exit();
			} else{
				alert('simpan');
			}*/

			});

		});


</script>