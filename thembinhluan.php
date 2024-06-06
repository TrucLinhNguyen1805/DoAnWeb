<?php
    $noidung = $_POST['noidung'];
    $username =  $_POST['username'];
    $idhanghoa = $_POST['idhanghoa'];
    $thoigian = $_POST['thoigian'];    
    //echo $noidung.'-'.$thoigian.'-'.$username.'-'.$idhanghoa."<br>";
    $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    $sql = "INSERT INTO binhluan(noidung, thoigian, idhanghoa, username) VALUES ('$noidung', '$thoigian', $idhanghoa, '$username')";
    $ketqua = mysqli_query($conn, $sql);
    //echo "OKELA";
  ?>


