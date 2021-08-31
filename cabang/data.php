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
					<i class="ace-icon fa fa-plus"></i>
					Tambah Data Kantor
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->	
					<div class="row">
						<div class="col-xs-12">
							<!-- Button Modal -->
							<button class="btn btn-white btn-default btn-round" data-toggle="modal" id="btnTambah" data-target="#Cabang">
							<i class="ace-icon fa fa-plus-circle sucess"></i> Input</button>
							
							<div class="clearfix">
								<div class="pull-right tableTools-container"></div>
							</div>
							<div class="table-header">
								Results for " Data Kantor "
							</div>
							<!-- div.table-responsive -->
							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center" width="6%">No</th>
											<th>ID Cabang</th>
											<th>Nama Cabang</th>
											<th style="width: 15%">Alamat</th>
											<th>No Telepon</th>
											<th style="width: 15%">Email</th>
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
			
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->



<!-- Modal -->
<div class="modal fade" id="Cabang" tabindex="-1">
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
				<form name="#" id="frmCabang" action="" method="post">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr>
							<td style="width: 25%">ID Cabang</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtID" id="txtIDCabang" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Nama Cabang</td>
							<td style="width: 75%">
								<select class="form-control" name="txtNamaCabang" id="txtNamaCabang"  class="form-control">
        							<option value="">-- Pilih Cabang --</option>
									<option value="Yogyakarta">Outsource Area Bantul, Yogyakarta</option>
									<option value="Malang">Outsource Area Batu, Malang</option>
									<option value="Palembang">Outsource Area Jakabaring, Palembang</option>
									<option value="Bandung">Outsource Area Jatinangor, Bandung</option>
									<option value="Jakarta">Outsource Area Meruya, Jakarta</option>
      							</select>
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Alamat</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="cmbAlamat" id="cmbAlamat" required="" value="">
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
<!-- Modal -->
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
			url 	: '<?php echo $baseURL; ?>api.keyword_cabang.php',
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
			
			$.post("<?php echo $baseURL; ?>api.keyword_cabang.php",{
				type:1,
				txtIDCabang:$('#txtIDCabang').val(),
				txtNamaCabang:$('#txtNamaCabang').val(),
				cmbAlamat:$('#cmbAlamat').val(),
				txtNoTelp:$('#txtNoTelp').val(),
				txtEmail:$('#txtEmail').val()
				}, function(data){

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
	 			
	 			$('#txtIDCabang').val('');
	 			$('#txtNamaCabang').val('');
				$('#cmbAlamat').val('');
				$('#txtNoTelp').val('');
				$('#txtEmail').val('');

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
		$("#Cabang").modal('show');
		
		id_cabang		= myTable.row( $(this).parents('tr') ).data()[1];
		nama_cabang		= myTable.row( $(this).parents('tr') ).data()[2];
		alamat_cabang	= myTable.row( $(this).parents('tr') ).data()[3];
		no_telepon		= myTable.row( $(this).parents('tr') ).data()[4];
		email			= myTable.row( $(this).parents('tr') ).data()[5];
		
		$('#txtIDCabang').val(id_cabang);
		$('#txtNamaCabang').val(nama_cabang);
		$('#cmbAlamat').val(alamat_cabang);
		$('#txtNoTelp').val(no_telepon);
		$('#txtEmail').val(email);
	});

	$('#dynamic-table tbody').on('click', '.fa-trash-o', function(){
		var jawab;
		obj	= $(this).parents('tr');
		id	= myTable.row( $(this).parents('tr') ).data()[1];

		jawab=confirm("Apakah Anda yakin untuk menghapus record\n"+
				"ID Cabang : " +id+"\n"+"Nama Cabang : " +myTable.row( $(this).parents('tr') ).data()[2]+"");

		if (jawab==false){
			exit();
		}
		console.log(id);
		$.post( "<?php echo $baseURL;?>api.keyword_cabang.php",{ type: "3", id:id}, function (data){
			obj	= $.parseJSON(data);
			if (obj.msg[0]=="hapus"){
				$("#myModal2").modal('show');

				$('#konfirmasihapus').html(
					'<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                    '<button type ="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+'<strong>Sukses!</strong><br/>'+obj.msg[1]+
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

<!-- Footer -->
<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>