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
					<i class="ace-icon fa fa-info"></i>
					<a href="#">About Us</a>
				</li>
				<li class="active">Kontak</li>
			</ul><!-- /.breadcrumb -->

		</div>

		<div class="page-content">
		<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->	
		<div class="row">
			<div class="col-xs-12">
				
				<h3 class="header smaller lighter blue">Table Data Kontak</h3>
				
				<!-- Button Modal -->
				<button class="btn btn-white btn-default btn-round" data-toggle="modal" data-target="#Kontak">
				<i class="ace-icon fa fa-plus-circle sucess"></i> Input</button>
				
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
				<div class="table-header">
					Results for " Kontak "
				</div>
				<!-- div.table-responsive -->
				<!-- div.dataTables_borderWrap -->
				<div>
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Kontak</th>
								<th>Nama</th>
								<th>No Telepon</th>
								<th>Email</th>
								<th>Respon</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		<!-- PAGE CONTENT ENDS -->
		<br />
		
	</div><!-- /.col -->
</div><!-- /.row -->

			<div class="row">
				<div class="col-xs-12">
				
					
					<div class="widget-header widget-header-flat widget-header-small">
						<h5 class="widget-title">
							<i class="ace-icon fa fa-comments"></i>
							FORMULIR KONTAK
						</h5>
						
					</div>
					<br>

				</div><!-- /.col -->
			</div><!-- /.row -->

						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="">
								</div>

									<div class="">
										<div class="widget-main">
											<div>
												<label for="form-field-8">Nama</label>

												<textarea class="form-control" id="form-field-8" placeholder="Masukkan nama Anda"></textarea>
											</div>

											<br>

											<div>
												<label for="form-field-9">Telepon</label>

												<textarea class="form-control limited" id="form-field-9" maxlength="20" placeholder="0877-XXX-XXX"></textarea>
											</div>

											<br>

											<div>
												<label for="form-field-11">Email</label>

												<textarea id="form-field-11" class="autosize-transition form-control" placeholder="outsource.area@example.com"></textarea>
											</div>

											<br>

											<div>
												<label for="form-field-11">Pesan</label>

												<textarea id="form-field-11" class="autosize-transition form-control" style="width: 700px" placeholder="Masukkan pesan disini"></textarea>
											</div>

											<br>

											<div class="form-group">
												<label for="exampleInputFile">File input</label>
												<input type="file" id="exampleInputFile">
												<p class="help-block"></p>
											</div>
											<br />

											<button class="btn btn-success" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Kirim pesan
											</button>
										</div>
									</div>
								</div>
							</div><!-- /.span -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->

<!-- Modal -->
<div class="modal fade" id="Kontak" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
						<span class="white">&times;</span>
					</button>
					Input Data
				</div>
			</div>
			<div class="modal-body">
				<form name="#" id="frmKontak" action="" method="post">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr>
							<td style="width: 25%">ID Kontak</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtID" id="txtIDKontak" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Nama</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtNama" id="txtNama" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">No Telepon</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtNoTelp" id="txtNoTelp" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Email</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtEmail" id="txtEmail" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Respon</td>
							<td style="width: 75%">
								<select class="form-control" name="txtRespon" id="txtRespon"  class="form-control">
        							<option value="">-- Pilih Respon --</option>
        							<option value="Sudah Dibalas">Sudah Dibalas</option>
									<option value="Belum Dibalas">Belum Dibalas</option>
      							</select>
							</td>
						</tr>
			
					</table>
				</form>
			</div>
			<div class="modal-footer">
					<button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan">
						<i class="ace-icon fa fa-floppy-o bigger-120
						blue"></i> Simpan
				    </button>

					<button class="btn btn-white btn-default btn-round"
						data-dismiss="modal" aria-hidden="true">
						<i class="fa fa-minus-circle"></i>
						Tutup
					</button>
			</div>
		</div>
	</div>
</div>
<!-- /Modal -->
<!-- Modal 2 -->
		<div class="modal fade" id="myModal2" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header no-padding">
						<div class="table-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
								<span class="white">&times;</span>
							</button>
							Hapus data 
						</div>
					</div>
					<!-- /.modal-body-->
					<div class="modal-body">
						<div id="konfirmasihapus"></div>
					</div>
				</div> <!-- /.modal content--> 
			</div> <!-- /.modal dialog--> 
		</div>

<script src="<?php echo $baseURL; ?>js/jquery-2.1.4.min.js"></script>
<script src="<?php echo $baseURL; ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo $baseURL; ?>js/jquery.dataTables.bootstrap.min.js"></script>


<!-- js alert dialog -->
<script type="text/javascript">
$(document).ready(function(){
	var myTable = $("#dynamic-table").DataTable({
		"ajax" : {
			type	: "POST",
			url 	: '<?php echo $baseURL; ?>api.keyword_kontak.php',
			data 	: function(d) {
				d.type = "2";
			}},
			bAutoWidth: false,

					"aaSorting": [],
					"columnDefs": [],
		select : {
			style : 'multi'
		}	
	});
	
	$('#btnSimpan').click(function() {
			$.post("<?php echo $baseURL; ?>api.keyword_kontak.php",{
				type:1,
				txtIDKontak:$('#txtIDKontak').val(),
				txtNama:$('#txtNama').val(),
				txtNoTelp:$('#txtNoTelp').val(),
				txtEmail:$('#txtEmail').val(),
				txtRespon:$('#txtRespon').val(),
				}, function(data){
					//alert(data);
					
					console.log(data);
					obj = $.parseJSON(data);

					if (obj.msg[0]=="ok"){
			       
				$('#konfirmasi').html(
					'<div class="alert alert-success alert-dismissible fade in" role="alert">'+
						'<button type="button" class="close" data-dismiss="alert"aria-label="Close">'+
						'<span aria-hidden="true">&times;</span></button>'+'<strong>Sukses!</strong><br>'+obj.msg[1]+'</div>');

				setTimeout(function(){
					$('#konfirmasi').html('');
				},5000);
	 			
	 			$('#txtIDKontak').val('');
	 			$('#txtNama').val('');
	 			$('#txtNoTelp').val('');
	 			$('#txtEmail').val('');
	 			$('#txtRespon').val('');

	 		} else {
	 			$('#konfirmasi').html(
					'<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+'<strong>Error!</strong><br/>'+obj.msg[1]+
                    '</div>');
	 		}
			myTable.ajax.reload();
	 	});
	});
	     
	$('#dynamic-table tbody').on('click', '.fa-pencil-square-o', function() {
		$("#Kontak").modal('show');
		
		id_kontak		= myTable.row( $(this).parents('tr') ).data()[1];
		nama		 	= myTable.row( $(this).parents('tr') ).data()[2];
		no_telepon		= myTable.row( $(this).parents('tr') ).data()[3];
		email			= myTable.row( $(this).parents('tr') ).data()[4];
		respon      	= myTable.row( $(this).parents('tr') ).data()[5];

		$('#txtIDKontak').val(id_kontak);
		$('#txtNama').val(nama);
		$('#txtNoTelp').val(no_telepon);
		$('#txtEmail').val(email);
		$('#txtRespon').val(respon);
	});

	$('#dynamic-table tbody').on('click', '.fa-trash-o', function(){
		var jawab;
		id	= myTable.row( $(this).parents('tr') ).data()[1];

		jawab=confirm("Apakah Anda yakin untuk menghapus record\n"+
				"ID Kontak : " +id+"\n"+"Nama : " +myTable.row( $(this).parents('tr') ).data()[2]+"");

		if (jawab==false){
			exit();
		}
		console.log(id);
		$.post( "<?php echo $baseURL;?>api.keyword_kontak.php",{ type: "3", id:id}, 
			function (data){
			obj	= $.parseJSON(data);
			if (obj.msg[0]=="hapus"){
				$("#myModal2").modal('show');

				$('#konfirmasihapus').html(
					'<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                    '<button type ="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+'<strong>Hapus Data</strong><br/>'+obj.msg[1]+
                    '</div>');
				setTimeout(function(){
						$('#konfirmasihapus').html('');
						$("#myModal2").modal('hide');
					},2000);
				myTable.ajax.reload();	
			}
		});
	});
});
</script>  

<!-- footer -->
<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>