<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtNoKTP       =   $_REQUEST['txtNoKTP'];
            $txtNama        =   $_REQUEST['txtNama'];
            $txtNoTelp      =   $_REQUEST['txtNoTelp'];
            $cmbJenKel      =   $_REQUEST['cmbJenKel'];
            $txtAlamat      =   $_REQUEST['txtAlamat'];
            $txtPosisi      =   $_REQUEST['txtPosisi'];
            $cmbNamaCabang  =   $_REQUEST['cmbNamaCabang'];

            if (empty($txtNoKTP)) {
                    $mySql = "SELECT * FROM perekrutan WHERE no_ktp='".$txtNoKTP."'";
                } else {
                    $mySql = "SELECT * FROM perekrutan WHERE nama='".$txtNama."' AND NOT  (no_ktp='".$txtNoKTP."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b>$txtNoKTP </b> sudah ada. Silahkan ganti dengan yang lain!";

                } else {
                $pesanError = array();
                if (empty($txtNoKTP)) {
                    $pesanError[] = "NoKTP Tidak Boleh Kosong!";

                }
                if (empty($txtNama)) {
                    $pesanError[] = "Nama Tidak Boleh Kosong!";

                }
                if (empty($cmbJenKel)) {
                    $pesanError[] = "Jenis Kelamin Tidak Boleh Kosong!";

                }
                if (empty($txtNoTelp)) {
                    $pesanError[] = "Nomor Telepon Tidak Boleh Kosong!";

                }
                if (empty($txtAlamat)) {
                    $pesanError[] = "Alamat Tidak Boleh Kosong!";

                }
                if (empty($txtPosisi)) {
                    $pesanError[] = "Posisi Tidak Boleh Kosong!";

                }
                if (empty($cmbNamaCabang)) {
                    $pesanError[] = "Nama Cabang Tidak Boleh Kosong!";

                }

                if (count($pesanError) >= 1 ) {
                    $pesan="";
                    foreach ($pesanError as $pesan_tampil) {
                        $pesan.="$pesan_tampil <br>";
                    }
                    $data['msg'][0] = "error";
                    $data['msg'][1] = $pesan;
                } else {
                    $mySql  = "SELECT * FROM perekrutan WHERE no_ktp='$txtNoKTP'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO perekrutan (no_ktp, nama, no_telepon, jenis_kelamin, alamat, posisi, id_cabang)
                                VALUES ('$txtNoKTP', '$txtNama', '$txtNoTelp', '$cmbJenKel', '$txtAlamat', '$txtPosisi', '$cmbNamaCabang')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";

                            } else {
                            $mySql = "UPDATE perekrutan SET
                            no_ktp         ='$txtNoKTP',
                            nama           ='$txtNama',
                            no_telepon     ='$txtNoTelp',
                            jenis_kelamin  ='$cmbJenKel',
                            alamat         ='$txtAlamat',
                            posisi         ='$txtPosisi',
                            id_cabang      ='$cmbNamaCabang'
                            WHERE no_ktp   ='$txtNoKTP'";
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah";
                }
            }
        $myQry = mysqli_query($koneksidb, $mySql);
    }
    echo json_encode($data);
    break;

    case 2:
        $mySql = "SELECT * FROM perekrutan INNER JOIN cabang ON perekrutan.id_cabang = cabang.id_cabang";
        $myQry = mysqli_query($koneksidb, $mySql);
        $data ='';
        $i=0;
        while ($myData = mysqli_fetch_array($myQry)) {

        $akses='';
        $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a><a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red' ><i class='ace-icon fa fa-trash-o bigger-120'></i></span></center>";
    
        $data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],",
                $i+1,
                $myData['no_ktp'],
                $myData['nama'],
                $myData['no_telepon'],
                $myData['jenis_kelamin'],
                $myData['alamat'],
                $myData['posisi'],
                $myData['nama_cabang'],
                $akses
                );
        $i++;
    }			
    echo '{"data" : ['.substr($data,0,-1).']}';
    break;

// menghapus data disini
        case 3:
            $id     =   $_REQUEST['id'];
            $mySql  =   "DELETE FROM perekrutan WHERE no_ktp='".$id."'";
            $myQry  =   mysqli_query($koneksidb, $mySql);

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