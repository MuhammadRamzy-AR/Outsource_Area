<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtVisi    =   $_REQUEST['txtVisi'];
            $txtMisi    =   $_REQUEST['txtMisi'];

                if (empty($txtVisi)) {
                    $mySql = "SELECT * FROM tb_visi WHERE visi='".$txtVisi."'";
                } else {
                    $mySql = "SELECT * FROM tb_visi WHERE misi='".$txtMisi."' AND NOT  (visi='".$txtVisi."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b>$txtMisi </b> sudah ada. Silahkan ganti dengan yang lain!";
                } else {

                    $pesanError = array();
                    if (empty($txtVisi)) {
                        $pesanError[] = "Visi Tidak Boleh Kosong!";

                    }
                    if (empty($txtMisi)) {
                        $pesanError[] = "Misi Tidak Boleh Kosong!";

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
                        $mySql  = "SELECT * FROM tb_visi WHERE visi='$txtVisi'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO tb_visi (visi, misi)
                                VALUES ('$txtVisi', '$txtMisi')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";

                            } else {
                            $mySql = "UPDATE tb_visi SET visi ='$txtVisi', misi='$txtMisi' where visi = '$txtVisi' ";
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
            $mySql = "SELECT * FROM tb_visi";
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
                        $myData['visi'],
                        $myData['misi'],
                        $akses
                        );
                $i++;
            }			
            echo '{"data" : ['.substr($data,0,-1).']}';
            break;

// menghapus data disini
        case 3:
            $Visi 	=	$_REQUEST['id'];
            $mySql 	=	"DELETE FROM tb_visi WHERE visi='".$Visi."'";
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