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
					<a href="#"> About Us</a>
				</li>
				<li class="active">Visi & MIsi</li>
			</ul><!-- /.breadcrumb -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
					<i class="ace-icon fa fa-plus"></i>
					Tambah Visi & Misi
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->	
					<div class="row">
						<div class="col-xs-12">
							<!-- Button Modal -->
							<button class="btn btn-white btn-default btn-round" data-toggle="modal" id="btnTambah" data-target="#ViMi">
							<i class="ace-icon fa fa-plus-circle sucess"></i> Input</button>
							
							<div class="clearfix">
								<div class="pull-right tableTools-container"></div>
							</div>
							<div class="table-header">
								Visi & Misi
							</div>
							<!-- div.table-responsive -->
							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center" width="6%">No</th>
											<th>Visi</th>
											<th>Misi</th>
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
<div class="modal fade" id="ViMi" tabindex="-1">
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
				<form name="" id="Vimi" action="" method="post">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<tr>
							<td style="width: 25%">Visi</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtVisi" id="txtVisi" required="" value="">
							</td>
						</tr>
						<tr>
							<td style="width: 25%">Misi</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtMisi" id="txtMisi" required="" value="">
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
			url 	: '<?php echo $baseURL; ?>api.keyword.php',
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
			
			$.post("<?php echo $baseURL; ?>api.keyword.php",{
				type:1,
				txtVisi:$('#txtVisi').val(),
				txtMisi:$('#txtMisi').val()
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
	 			
	 			$('#txtVisi').val('');
	 			$('#txtMisi').val('');

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
		$("#ViMi").modal('show');
		$('#konfirmasi').html('');
		visi		= myTable.row( $(this).parents('tr') ).data()[1];
		misi		= myTable.row( $(this).parents('tr') ).data()[2];
		

		$('#txtVisi').val(visi);
		$('#txtMisi').val(misi);
	});

	$('#dynamic-table tbody').on('click', '.fa-trash-o', function(){
		var jawab;
		id			= myTable.row( $(this).parents('tr') ).data()[1];

		jawab=confirm("Apakah Anda yakin untuk menghapus record\n"+
				"Visi : " +id+"\n"+"Misi : " +myTable.row( $(this).parents('tr') ).data()[2]+"");

		if (jawab==false){
			exit();
		}
		console.log(id);
		$.post( "<?php echo $baseURL;?>api.keyword.php",{ type: "3", id:id}, function (data){
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
	$('#btnTambah').click(function(){
		$('#Vimi')[0].reset();
	});

});
		
</script>

<!-- Footer -->
<?php
	include "base_template_footer.php";	//akan memanggil base_template_footer.php sebagai footer
?>
<!-- Footer -->