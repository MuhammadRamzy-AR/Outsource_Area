<?php
session_start();
include_once "inc.connection.php";
$type   = $_REQUEST['type'];
switch ($type)
    {
        case 1:
            $txtIDKontak   =   $_REQUEST['txtIDKontak'];
            $txtNama       =   $_REQUEST['txtNama'];
            $txtNoTelp     =   $_REQUEST['txtNoTelp'];
            $txtEmail      =   $_REQUEST['txtEmail'];
            $txtRespon     =   $_REQUEST['txtRespon'];

            if (empty($txtIDKontak)) {
                    $mySql = "SELECT * FROM kontak WHERE id_kontak='".$txtIDKontak."'";
                } else {
                    $mySql = "SELECT * FROM kontak WHERE nama='".$txtNama."' AND NOT  (id_kontak='".$txtIDKontak."')";
                }
                $myQry = mysqli_query($koneksidb, $mySql);
                $myData = mysqli_fetch_array($myQry);
                if (mysqli_num_rows($myQry)>=1){
                        $data['msg'][0] = "error";
                        $data['msg'][1] = "<b>$txtNama </b> sudah ada. Silahkan ganti dengan yang lain!";

                } else {
                $pesanError = array();
                if (empty($txtIDKontak)) {
                    $pesanError[] = "ID Kontak Tidak Boleh Kosong!";

                }
                if (empty($txtNama)) {
                    $pesanError[] = "Nama Tidak Boleh Kosong!";

                }
                if (empty($txtNoTelp)) {
                    $pesanError[] = "No Telepon Tidak Boleh Kosong!";

                }
                if (empty($txtEmail)) {
                    $pesanError[] = "Email Telepon Tidak Boleh Kosong!";

                }
                if (empty($txtRespon)) {
                    $pesanError[] = "Respon Tidak Boleh Kosong!";

                }

                if (count($pesanError) >= 1 ) {
                    $pesan="";
                    foreach ($pesanError as $pesan_tampil) {
                        $pesan.="$pesan_tampil <br>";
                    }
                    $data['msg'][0] = "error";
                    $data['msg'][1] = $pesan;
                } else {
                        $mySql  = "SELECT * FROM kontak WHERE id_kontak='$txtIDKontak'";
                        $myQry  = mysqli_query ($koneksidb, $mySql);
                        $mySqlQ = mysqli_num_rows($myQry);

                        if($mySqlQ==0){
                            $mySql = "INSERT INTO kontak (id_kontak, nama, no_telepon, email, respon)
                                VALUES ('$txtIDKontak', '$txtNama', '$txtNoTelp', '$txtEmail', '$txtRespon')";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil ditambahkan";

                            } else {
                            $mySql = "UPDATE kontak SET
                            id_kontak       ='$txtIDKontak',
                            nama            ='$txtNama',
                            no_telepon      ='$txtNoTelp',
                            email           ='$txtEmail',
                            respon          ='$txtRespon',
                            WHERE id_kontak ='$txtIDKontak'";
                            $data['msg'][0] = "ok";
                            $data['msg'][1] = "Data berhasil diubah";
                        }
                    }
                $myQry = mysqli_query($koneksidb, $mySql);
            }
    echo json_encode($data);
    break;

    case 2:
        $mySql = "SELECT * FROM kontak ORDER BY id_kontak";
        $myQry = mysqli_query($koneksidb, $mySql);
        $data ='';
        $i=0;
        while ($myData = mysqli_fetch_array($myQry)) {

        $akses='';
        $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a><a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red' ><i class='ace-icon fa fa-trash-o bigger-120'></i></span></center>";
    
        $data .= sprintf("[\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"],",
                $i+1,
                $myData['id_kontak'],
                $myData['nama'],
                $myData['no_telepon'],
                $myData['email'],
                $myData['respon'],
                $akses
                );
        $i++;
    }			
    echo '{"data" : ['.substr($data,0,-1).']}';
    break;

// menghapus data disini
        case 3:
            $id     =   $_REQUEST['id'];
            $mySql  =   "DELETE FROM kontak WHERE id_kontak='".$id."'";
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