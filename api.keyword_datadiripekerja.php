<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtIDPekerja       =   $_REQUEST['txtIDPekerja'];
            $cmbKartu           =   $_REQUEST['cmbKartu'];
            $cmbNamaPerusahaan  =   $_REQUEST['cmbNamaPerusahaan'];

                if (empty($txtIDPekerja)) {
                    $mySql = "SELECT * FROM data_diri_pekerja WHERE id_pekerja='".$txtIDPekerja."'";
                } else {
                    $mySql = "SELECT * FROM data_diri_pekerja WHERE no_ktp='".$cmbKartu."' AND NOT  (id_pekerja='".$txtIDPekerja."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b> $txtIDPekerja </b> sudah ada. Silahkan ganti dengan yang lain!";

                } else {
                    $pesanError = array();
                    if (empty($txtIDPekerja)) {
                        $pesanError[] = "ID Pekerja Tidak Boleh Kosong!";

                    }
                    if (empty($cmbKartu)) {
                        $pesanError[] = "No KTP Tidak Boleh Kosong!";

                    }
                    if (empty($cmbNamaPerusahaan)) {
                        $pesanError[] = "Nama Perusahaan Tidak Boleh Kosong!";

                    }
                    if (count($pesanError) >= 1 ) {
                        $pesan="";
                        foreach ($pesanError as $pesan_tampil) {
                            $pesan.="$pesan_tampil <br>";
                        }
                        $data['msg'][0] = "error";
                        $data['msg'][1] = $pesan;
                    } else {

                        // memasukkan data ke dalam database
                        $mySql  = "SELECT * FROM data_diri_pekerja WHERE id_pekerja='$txtIDPekerja'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO data_diri_pekerja (id_pekerja, no_ktp, id_perusahaan)
                                VALUES ('$txtIDPekerja', '$cmbKartu', '$cmbNamaPerusahaan')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";

                        } 
                        else {
                                $mySql          = "UPDATE data_diri_pekerja SET
                                id_pekerja      ='$txtIDPekerja',
                                no_ktp          ='$cmbKartu',
                                id_perusahaan   ='$cmbNamaPerusahaan',
                                WHERE id_pekerja='$txtIDPekerja'";
                                $data['msg'][0] = "ok";
                                $data['msg'][1] = "Data berhasil diubah";
                        }
                    }
                    $myQry = mysqli_query($koneksidb, $mySql);
                }
        echo json_encode($data);
        break;

        // menampilkan data ke dalam tabel
        case 2:
            $mySql = "SELECT a.*,b.*,c.* FROM data_diri_pekerja a INNER JOIN perekrutan b ON a.no_ktp=b.no_ktp INNER JOIN client c on a.id_perusahaan=c.id_perusahaan";
            $myQry = mysqli_query($koneksidb, $mySql);
            $data = "";
            $i=0;
            while ($myData = mysqli_fetch_array($myQry)) {
                $akses="";
                $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>   <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red' ><i class='ace-icon fa fa-trash-o bigger-120'></i></span></center>";
                
                $data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],",
                        $i+1,
                        $myData['id_pekerja'],
                        $myData['no_ktp'],
                        $myData['nama'],
                        $myData['posisi'],
                        $myData['nama_perusahaan'],
                        $akses
                        );
                $i++;
            }			
            echo '{"data" : ['.substr($data,0,-1).']}';
            break;

        // menghapus data disini
        case 3:
            $id 	=	$_REQUEST['id'];
            $mySql 	=	"DELETE FROM data_diri_pekerja WHERE id_pekerja='".$id."'";
            $myQry 	=	mysqli_query($koneksidb, $mySql);

            if(!$myQry){
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "<b>Error:</b>".mysqli_error($koneksidb);
            } 
            else{
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Hapus data berhasil dilakukan";
            }
            echo json_encode($data);
        break;
        default;
}