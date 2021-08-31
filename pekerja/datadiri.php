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
					<i class="ace-icon fa fa-black-tie"></i>
					<a href="#"> Data Pekerja</a>
				</li>
				<li class="active">Data Diri Pekerja</li>
			</ul><!-- /.breadcrumb -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
					<i class="ace-icon fa fa-plus"></i>
					Tambah Data Diri Pekerja
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->	
					<div class="row">
						<div class="col-xs-12">
							<!-- Button Modal -->
							<button class="btn btn-white btn-default btn-round" data-toggle="modal" data-target="#DataPekerja">
							<i class="ace-icon fa fa-plus-circle sucess"></i> Input</button>
							
							<div class="clearfix">
								<div class="pull-right tableTools-container"></div>
							</div>
							<div class="table-header">
								Results for "Data Diri Pekerja "
							</div>
							<!-- div.table-responsive -->
							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>ID Pekerja</th>
											<th style="width: 15%">No KTP</th>
											<th>Nama</th>
											<th>Posisi</th>
											<th>Nama Perusahaan</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
									</tbody>

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
<div class="modal fade" id="DataPekerja" tabindex="-1">
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
				<form name="#" id="frmStaKer" action="" method="post">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr>
							<td style="width: 25%">ID Pekerja</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtIDPekerja" id="txtIDPekerja" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">No KTP</td>
								<td style="width: 75%">
								<select class="form-control" name="cmbKartu" id="cmbKartu" class="form-control" >
									<option value="">-- Pilih No KTP --</option>
										<?php
										include_once 'inc.connection.php';

										$result=mysqli_query($koneksidb,"SELECT * FROM perekrutan ORDER BY no_ktp ASC");
										while ($row=mysqli_fetch_assoc($result)) {
										echo "<option value = '$row[no_ktp]'>$row[no_ktp]</option>";
										}
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Nama Perusahaan
								<td style="width: 75%">
								<select class="form-control" name="cmbNamaPerusahaan" id="cmbNamaPerusahaan" class="form-control" >
									<option value="">-- Pilih Perusahaan --</option>
										<?php
										include_once 'inc.connection.php';

										$result=mysqli_query($koneksidb,"SELECT * FROM client ORDER BY id_perusahaan ASC");
										while ($row=mysqli_fetch_assoc($result)) {
										echo "<option value = '$row[id_perusahaan]'>$row[nama_perusahaan]</option>";
										}
										?>
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
			url 	: '<?php echo $baseURL; ?>api.keyword_datadiripekerja.php',
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
			
			$.post("<?php echo $baseURL; ?>api.keyword_datadiripekerja.php",{
				type:1,
				txtIDPekerja:$('#txtIDPekerja').val(),
				cmbKartu:$('#cmbKartu').val(),
				cmbNamaPerusahaan:$('#cmbNamaPerusahaan').val()
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
	 			$('#txtIDPekerja').val('');
	 			$('#cmbKartu').val('');
	 			$('#cmbNamaPerusahaan').val('');

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
		$("#DataPekerja").modal('show');
		
		id_pekerja		= myTable.row( $(this).parents('tr') ).data()[1];
		no_ktp			= myTable.row( $(this).parents('tr') ).data()[2];
		id_perusahaan	= myTable.row( $(this).parents('tr') ).data()[5];
		
		$('#txtIDPekerja').val(id_pekerja);
		$('#cmbKartu').val(no_ktp);
		$('#cmbNamaPerusahaan').val(id_perusahaan);
	});

	$('#dynamic-table tbody').on('click', '.fa-trash-o', function(){
		var jawab;
		obj	= $(this).parents('tr');
		id	= myTable.row( $(this).parents('tr') ).data()[1];

		jawab=confirm("Apakah Anda yakin untuk menghapus record\n"+
				"ID Pekerja : " +id+"\n"+"No KTP : " +myTable.row( $(this).parents('tr') ).data()[2]+"");

		if (jawab==false){
			exit();
		}
		console.log(id);
		$.post( "<?php echo $baseURL;?>api.keyword_datadiripekerja.php",{ type: "3", id:id}, function (data){
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
</script>