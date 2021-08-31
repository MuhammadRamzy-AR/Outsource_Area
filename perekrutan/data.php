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
					<i class="ace-icon fa fa-briefcase"></i>
					<a href="#"> Jasa</a>
				</li>
				<li class="active">Perekrutan</li>
			</ul><!-- /.breadcrumb -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
					<i class="ace-icon fa fa-plus"></i>
					Data Perekrutan
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->	
					<div class="row">
						<div class="col-xs-12">
							<!-- Button Modal -->
							<button class="btn btn-white btn-default btn-round" data-toggle="modal" data-target="#Rekrut">
							<i class="ace-icon fa fa-plus-circle sucess"></i> Input</button>
							
							<div class="clearfix">
								<div class="pull-right tableTools-container"></div>
							</div>
							<div class="table-header">
								Perekrutan
							</div>
							<!-- div.table-responsive -->
							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center" width="6%">No</th>
											<th>No KTP</th>
											<th>Nama</th>
											<th>No Telepon</th>
											<th>Jenis Kelamin</th>
											<th>Alamat</th>
											<th>Posisi</th>
											<th>Pilihan Cabang</th>
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
<div class="modal fade" id="Rekrut" tabindex="-1">
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
				<form name="" id="rekrut" action="" method="post">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr>
							<td style="width: 25%">No KTP</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtNoKTP" id="txtNoKTP" required="" value="">
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
							<td style="width: 25%">Jenis Kelamin</td>
							<td style="width: 75%">
								<select class="form-control" name="cmbJenKel" id="cmbJenKel"  class="form-control">
        							<option value="">-- Pilih Jenis Kelamin --</option>
        							<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
      							</select>
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Alamat</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtAlamat" id="txtAlamat" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Posisi</td>
							<td style="width: 75%">
								<select class="form-control" name="txtPosisi" id="txtPosisi"  class="form-control">
        							<option value="">-- Pilih Posisi --</option>
        							<option value="Driver">Driver</option>
									<option value="Security">Security</option>
									<option value="CleanSer">Cleaning Service</option>
									<option value="DeskProm">Desktop Programmer</option>
									<option value="WebProm">Web Programmer</option>
									<option value="MobProm">Mobile Programmer</option>
									<option value="Sekretaris">Sekretaris</option>
									<option value="C-CO">Call-Center Operator</option>
      							</select>
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Pilihan Cabang</td>
								<td style="width: 75%">
								<select class="form-control" name="cmbNamaCabang" id="cmbNamaCabang" class="form-control" >
									<option value="">-- Pilih Cabang --</option>
										<?php
										$koneksidb = mysqli_connect("localhost", "root", "", "outsourcearea");

										$result=mysqli_query($koneksidb,"SELECT * FROM cabang ORDER BY id_cabang ASC ");
										while ($row=mysqli_fetch_assoc($result)) {
										echo "<option value = '$row[id_cabang]'>$row[nama_cabang]</option>";
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
			url 	: '<?php echo $baseURL; ?>api.keyword_rekrut.php',
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
			$.post("<?php echo $baseURL; ?>api.keyword_rekrut.php",{
				type:1,
				txtNoKTP:$('#txtNoKTP').val(),
				txtNama:$('#txtNama').val(),
				txtNoTelp:$('#txtNoTelp').val(),
				cmbJenKel:$('#cmbJenKel').val(),
				txtAlamat:$('#txtAlamat').val(),
				txtPosisi:$('#txtPosisi').val(),
				cmbNamaCabang:$('#cmbNamaCabang').val()
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
	 			
	 			$('#txtNoKTP').val('');
	 			$('#txtNama').val('');
	 			$('#txtNoTelp').val('');
	 			$('#cmbJenKel').val('');
	 			$('#txtAlamat').val('');
	 			$('#txtPosisi').val('');
	 			$('#cmbNamaCabang').val('');

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
		$("#Rekrut").modal('show');
		
		no_ktp			= myTable.row( $(this).parents('tr') ).data()[1];
		nama		 	= myTable.row( $(this).parents('tr') ).data()[2];
		no_telepon		= myTable.row( $(this).parents('tr') ).data()[3];
		jenis_kelamin	= myTable.row( $(this).parents('tr') ).data()[4];
		alamat      	= myTable.row( $(this).parents('tr') ).data()[5];
		posisi		    = myTable.row( $(this).parents('tr') ).data()[6];
		id_cabang		= myTable.row( $(this).parents('tr') ).data()[7];
		

		$('#txtNoKTP').val(no_ktp);
		$('#txtNama').val(nama);
		$('#txtNoTelp').val(no_telepon);
		$('#cmbJenKel').val(jenis_kelamin);
		$('#txtAlamat').val(alamat);
		$('#txtPosisi').val(posisi);
		$('#cmbNamaCabang').val(id_cabang);
	});

	$('#dynamic-table tbody').on('click', '.fa-trash-o', function(){
		var jawab;
		id	= myTable.row( $(this).parents('tr') ).data()[1];

		jawab=confirm("Apakah Anda yakin untuk menghapus record\n"+
				"No KTP : " +id+"\n"+"Nama : " +myTable.row( $(this).parents('tr') ).data()[2]+"");

		if (jawab==false){
			exit();
		}
		console.log(id);
		$.post( "<?php echo $baseURL;?>api.keyword_rekrut.php",{ type: "3", id:id}, 
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

<!-- Footer -->
<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>