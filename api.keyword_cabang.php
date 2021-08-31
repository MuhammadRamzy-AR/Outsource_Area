<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtIDCabang    =   $_REQUEST['txtIDCabang'];
            $txtNamaCabang  =   $_REQUEST['txtNamaCabang'];
            $cmbAlamat      =   $_REQUEST['cmbAlamat'];
            $txtNoTelp      =   $_REQUEST['txtNoTelp'];
            $txtEmail       =   $_REQUEST['txtEmail'];

                if (empty($txtIDCabang)) {
                    $mySql = "SELECT * FROM cabang WHERE no_telepon='".$txtNoTelp."'";
                } else {
                    $mySql = "SELECT * FROM cabang WHERE nama_cabang='".$txtNamaCabang."' AND NOT  (id_cabang='".$txtIDCabang."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b> $txtIDCabang </b> sudah ada. Silahkan ganti dengan yang lain!";

                } else {
                    $pesanError = array();
                    if (empty($txtIDCabang)) {
                        $pesanError[] = "ID Cabang Tidak Boleh Kosong!";

                    }
                    if (empty($txtNamaCabang)) {
                        $pesanError[] = "Nama Cabang Tidak Boleh Kosong!";

                    }
                    if (empty($cmbAlamat)) {
                        $pesanError[] = "Alamat Tidak Boleh Kosong!";

                    }
                    if (empty($txtNoTelp)) {
                        $pesanError[] = "No Telepon Tidak Boleh Kosong!";

                    }
                    if (empty($txtEmail)) {
                        $pesanError[] = "Email Tidak Boleh Kosong!";

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
                        $mySql  = "SELECT * FROM cabang WHERE id_cabang='$txtIDCabang'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO cabang (id_cabang, nama_cabang, alamat_cabang, no_telepon, email)
                                VALUES ('$txtIDCabang', '$txtNamaCabang', '$cmbAlamat', '$txtNoTelp', '$txtEmail')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";

                        } 
                        else {
                                $mySql          = "UPDATE cabang SET
                                id_cabang       ='$txtIDCabang',
                                nama_cabang     ='$txtNamaCabang',
                                alamat_cabang   ='$cmbAlamat',
                                no_telepon      ='$txtNoTelp',
                                email           ='$txtEmail'
                                WHERE id_cabang ='$txtIDCabang'";
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
            $mySql = "SELECT * FROM cabang ORDER BY id_cabang";
            $myQry = mysqli_query($koneksidb, $mySql);
            $data = "";
            $i=0;
            while ($myData = mysqli_fetch_array($myQry)) {
                $akses="";
                $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>   <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red' ><i class='ace-icon fa fa-trash-o bigger-120'></i></span></center>";
                
                $data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],",
                        $i+1,
                        $myData['id_cabang'],
                        $myData['nama_cabang'],
                        $myData['alamat_cabang'],
                        $myData['no_telepon'],
                        $myData['email'],
                        $akses
                        );
                $i++;
            }			
            echo '{"data" : ['.substr($data,0,-1).']}';
            break;

        // menghapus data disini
        case 3:
            $id 	=	$_REQUEST['id'];
            $mySql 	=	"DELETE FROM cabang WHERE id_cabang='".$id."'";
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