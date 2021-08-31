<?php
# koneksi ke web server lokal
$myHost = "localhost"; //nama sever
$myUser = "root"; //nama user database
$mypass = ""; //password yang digunakan
$myDbs = "outsourcearea1"; //nama database yang kita buat

$koneksidb = mysqli_connect($myHost, $myUser, $mypass, $myDbs);

if (! $koneksidb) {
	//jika gagal koneksi
	echo "failed connection !";
}
/*
<?php
$servername = "localhost";
$database = "niagahos_namadatabase";
$username = "niagahos_user";
$password = "passworddatabase";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>
*/
?>

