<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'data_siswa');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Koneksi Tidak Terhubung');
?>