<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $rombel = $_POST['rombel'];
        $rayon = $_POST['rayon'];

        require_once('koneksi.php');

        $sql = "UPDATE tb_siswa SET nama = '$nama', rombel = '$rombel', rayon = '$rayon' WHERE nis = '$nis'";

        if(mysqli_query($con, $sql)){
            echo 'Berhasil Update Data';
        }else{
            echo 'Gagal Update Data!';
        }
        mysqli_close($con);
    }
?>