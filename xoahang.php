<?php
    session_start();
    $doan_cuoiky = $_SESSION['doan_cuoiky'];
    $id = $_GET['idhang'];
    if($id == 0)
    {
    unset($_SESSION['doan_cuoiky']);
    }
    else
    {
    unset($_SESSION['doan_cuoiky'][$id]);
    }
    header("location:giohang.php");
print_r($_SESSION['doan_cuoiky']);
exit();
?>

