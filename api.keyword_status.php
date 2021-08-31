<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtIDStatus     =   $_REQUEST['txtIDStatus'];
            $txtNamaPekerja  =   $_REQUEST['txtNamaPekerja'];
            $cmbStatus       =   $_REQUEST['cmbStatus'];
            $txtLamaKontrak  =   $_REQUEST['txtLamaKontrak'];

                if (empty($txtIDStatus)) {
                    $mySql = "SELECT * FROM status WHERE id_status ='".$txtIDStatus."'";
                } else {
                    $mySql = "SELECT * FROM status WHERE no_ktp ='".$txtNamaPekerja."' AND NOT  (id_status='".$txtIDStatus."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b> $txtIDStatus </b> sudah ada. Silahkan ganti dengan yang lain!";

                } else {
                    $pesanError = array();
                    if (empty($txtIDStatus)) {
                        $pesanError[] = "ID Status Tidak Boleh Kosong!";

                    }
                    if (empty($txtNamaPekerja)) {
                        $pesanError[] = "Nama Tidak Boleh Kosong!";

                    }
                    if (empty($cmbStatus)) {
                        $pesanError[] = "Status Tidak Boleh Kosong!";

                    }
                    if (empty($txtLamaKontrak)) {
                        $pesanError[] = "Lama Kontrak Tidak Boleh Kosong!";

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
                        $mySql  = "SELECT * FROM status WHERE id_status='$txtIDStatus'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO status (id_status, no_ktp, status, lama_kontrak)
                                VALUES ('$txtIDStatus', '$txtNamaPekerja', '$cmbStatus', '$txtLamaKontrak')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";
                        } 
                        else {
                                $mySql          = "UPDATE status SET
                                id_status       ='$txtIDStatus',
                                no_ktp          ='$txtNamaPekerja',
                                status          ='$cmbStatus',
                                lama_kontrak    ='$txtLamaKontrak'
                                WHERE id_status ='$txtIDStatus'";
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
            $mySql = "SELECT * FROM status INNER JOIN perekrutan ON status.no_ktp = perekrutan.no_ktp";
            $myQry = mysqli_query($koneksidb, $mySql);
            $data = "";
            $i=0;
            while ($myData = mysqli_fetch_array($myQry)) {
                $akses="";
                $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>   <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red' ><i class='ace-icon fa fa-trash-o bigger-120'></i></span></center>";
                
                $data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],",
                        $i+1,
                        $myData['id_status'],
                        $myData['no_ktp'],
                        $myData['nama'],
                        $myData['status'],
                        $myData['lama_kontrak'],
                        $akses
                        );
                $i++;
            }			
            echo '{"data" : ['.substr($data,0,-1).']}';
            break;

        // menghapus data disini
        case 3:
            $id 	=	$_REQUEST['id'];
            $mySql 	=	"DELETE FROM status WHERE id_status='".$id."'";
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