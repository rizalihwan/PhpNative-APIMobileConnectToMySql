<?php
    require_once('koneksi.php');
    $sql ="SELECT * FROM tb_siswa";
    $r=mysqli_query($con,$sql);

    $result = array();

    while($row = mysli_fetch_array($r)){
        array_push($result, array(
            "nis"=>$row['nis'],
            "nama"=>$row['nama'],
        ));
    }

    echo json_encode(array('result'=>$result));
    
    mysqli_close($con);
?>