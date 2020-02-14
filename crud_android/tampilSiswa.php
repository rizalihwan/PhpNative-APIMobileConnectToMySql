<?php
    $nis=$_GET['nis'];

    require_once('koneksi.pphp');

    $sql = "SELECT * FROM tb_siswa WHERE nis='$nis'";

    $r= mysqli_query($con,$sql);

    $result = array();
    $row = mysqli_fetch_array($r);
    array_push($result, array(
        "nis"=>$row['nis'],
        "nama"=>$row['nama'],
        "rombel"=>$row['rombel'],
        "rayon"=>$row['rayon']
    ));

    echo json_encode(array('result'=>$result));
    mysqli_close($con);

?>