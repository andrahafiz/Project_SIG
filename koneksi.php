<?php $host = "localhost";
$user = "root";
$password = "";
$database = "peantist";
$koneksi = mysqli_connect($host, $user, $password);
mysqli_select_db($database, $koneksi);
//cek koneksi
if ($koneksi) {
    //echo "Berhasil Terhubung";
} else {
    echo "Gagal Terhubung";
}
