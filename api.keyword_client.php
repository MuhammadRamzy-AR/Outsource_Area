<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtIDPerusahaan    =   $_REQUEST['txtIDPerusahaan'];
            $txtNamaPerusahaan  =   $_REQUEST['txtNamaPerusahaan'];

                if (empty($txtIDPerusahaan)) {
                    $mySql = "SELECT * FROM client WHERE id_perusahaan='".$txtIDPerusahaan."'";
                } else {
                    $mySql = "SELECT * FROM client WHERE nama_perusahaan='".$txtNamaPerusahaan."' AND NOT  (id_perusahaan='".$txtIDPerusahaan."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b>$txtIDPerusahaan </b> sudah ada. Silahkan ganti dengan yang lain!";
                } else {

                    $pesanError = array();
                    if (empty($txtIDPerusahaan)) {
                        $pesanError[] = "ID Perusahaan Tidak Boleh Kosong!";

                    }
                    if (empty($txtNamaPerusahaan)) {
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
                        $mySql  = "SELECT * FROM client WHERE id_perusahaan='$txtIDPerusahaan'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO client (id_perusahaan, nama_perusahaan)
                                VALUES ('$txtIDPerusahaan', '$txtNamaPerusahaan')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";

                            } else {
                            $mySql = "UPDATE client SET id_perusahaan ='$txtIDPerusahaan', nama_perusahaan='$txtNamaPerusahaan' where id_perusahaan = '$txtIDPerusahaan' ";
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
            $mySql = "SELECT * FROM client ORDER BY id_perusahaan";
            $myQry = mysqli_query($koneksidb, $mySql);
            $data = "";
            $i=0;
            while ($myData = mysqli_fetch_array($myQry)) {
                $akses="";
                //if (($_SESSION['SES_AKSES]!=="M") &&
                //($_SESSION['SES-AKSES']!=="T")){
                    $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>   <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red' ><i class='ace-icon fa fa-trash-o bigger-120'></i></span></center>";
                //}
                $data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\"],",
                        $i+1,
                        $myData['id_perusahaan'],
                        $myData['nama_perusahaan'],
                        $akses
                        );
                $i++;
            }			
            echo '{"data" : ['.substr($data,0,-1).']}';
            break;

// menghapus data disini
        case 3:
            $Visi 	=	$_REQUEST['id'];
            $mySql 	=	"DELETE FROM client WHERE id_perusahaan='".$Visi."'";
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
};
?>