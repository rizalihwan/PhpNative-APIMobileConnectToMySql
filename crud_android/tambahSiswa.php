<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $rombel = $_POST['rombel'];
        $rayon = $_POST['rayon'];

        $sql = "INSERT INTO tb_siswa VALUES('$nis', '$nama', '$rombel', '$rayon')";

        require_once('koneksi.php');

        if(mysqli_query($con,$sql)){
            echo 'Berhasil Menambah Data';
        }else{
            echo 'Gagal Menambahkan Data!';
        }
        mysqli_close($con);
    }

?>