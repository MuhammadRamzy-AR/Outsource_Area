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
          			<i class="fa fa-users"></i>
          				<a href="#">Data Pekerja</a>
        		</li>
				<li class="active">Tambah Data Pekerja </li>
			  </ul><!-- /.breadcrumb -->
			  
				<div class="nav-search" id="nav-search">
      			</div><!-- /.nav-search -->
    	</div>
	
		<div class="page-content">
    		<div class="row">
        		<div class="col-xs-12">
          			<div class="clearfix">
            			<h4 class="pink">
              				<i class="ace-icon fa fa-plus blue"></i>
              					Tambah Data Pekerja
              				<div class="pull-right tableTools-container"></div>
            			</h4>
          			</div>
          				<div class="table-header">
              				Hasil untuk "Data Customer "
          				</div>
          		<!-- BATAS HEADER TITLE -->
          	<div class="ln_solid"></div>
    
          <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
        			<table id="datatable" class="table table-striped table-bordered">
            		<thead>
              		<tr>    
                		<th class="center" width="6%">No</th>
	                	<th class="center" width="15%">ID Pekerja</th>
    	            	<th class="center" width="15%">No KTP</th>
        	        	<th class="center" width="20%">Nama</th>
            	    	<th class="center" width="15%">Telepon</th>
                		<th class="center" width="10%">Jenis Kelamin</th>
						<th class="center" width="25%">Alamat</th>
                		<th class="center">
                  			<a href="" class="tooltip-info" data-toggle="modal" data-rel="tooltip" data-target="#myModal" title="Tambah" >
                  				<span class="red"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
                		</th>
              		</tr>
					</thead>
				          
            		<tr>
            			<td align="center"></td>
	                	<td></td>
    	            	<td align="center"></td>
        	        	<td></td>
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


<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
        		<div class="modal-header no-padding">
        			<div class="table-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="red">&times;</span>
						</button>
							Tambah data customer
        			</div>
      			</div>
 
 
 
				<div class="modal-body">
					<form action="="<?php echo base_url; ?>" " name="modal_popup" enctype="multipart/form-data" method="POST">
 
 
					<table class="table table-form">
   						<tr>
      						<td style="width: 25%">ID Pekerja</td>
      						<td style="width: 75%">
      							<input type="text" class="form-control" name="txtnama" placeholder="masukan ID Pekerja" id="txtnama"required value="">
      						</td>
	    				</tr>
	
						<tr>
      						<td style="width: 25%">No KTP</td>
      						<td style="width: 75%">
      							<input type="text" class="form-control" name="txtktp" placeholder="masukan No KTP" id="txtktp"required value="">
      						</td>
    					</tr>
	 
						<tr>
      						<td style="width: 25%">Nama</td>
      						<td style="width: 75%">
      							<input type="text" class="form-control" name="txtnama" placeholder="masukan nama" id="txtnama" required value="">
      						</td>
    					</tr>
	 
						<tr>
      						<td style="width: 25%">Telepon</td>
      						<td style="width: 75%">
		    					<input type="text" class="form-control" name="txttelepon" placeholder="masukan telepon" id="txttelepon"required value="">
      						</td>
    					</tr>
	
						<tr>
      						<td style="width: 25%">Jenis Kelamin
      						<td style="width: 75%">
     							<select class="form-control" name="cmbjeniskelamin" id="cmbjeniskelamin"  class="form-control" >
        							<option value="">- - select - -</option>
        							<option value="Pria">Pria</option>
        							<option value="Wanita">Wanita</option>
      							</select>
      						</td>
    					</tr>
	 
						<tr>
      						<td style="width: 25%">Alamat</td>
      						<td style="width: 75%">
      							<input type="text" class="form-control" name="txtalamat" placeholder="masukan alamat" id="txtalamat" required value="">
      						</td>
    					</tr>
					</table>


        			<div class="modal-footer">
						<button class="btn btn-white btn-info btn-bold" type="submit" id="btnSimpan" name="btnSimpan>
          					<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
        				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
          					<i class="fa fa-minus-circle"></i> Tutup</button>

					</div>
      			</div>
      
    		</div>
  		</div>
  
	</div>

</body>


<?php
  include "base_template_footer.php"; //akan memanggil base_template_footer.php sebagai footer
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
