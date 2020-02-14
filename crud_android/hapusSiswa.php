<?php
    $nis = $_GET['nis'];
    require_once('koneksi.php');

    $sql = "DELETE FROM tb_siswa WHERE nis = '$nis'";

    if(mysqli_query($con, $sql)){
        echo 'Data Berhasil Dihapus';
    }else{
        echo 'Data Gagal Dihapus!';
    }
    mysqli_close($con);
?>  