<?php
    session_start();
    if (isset($_SESSION['username'])) {
        $id = $_GET['idhang'];
    if (isset($_SESSION['doan_cuoiky'][$id]))
        $soluong = $_SESSION['doan_cuoiky'][$id] + 1;
        else
            $soluong = 1;
        $_SESSION['doan_cuoiky'][$id] = $soluong;
        header("location:giohang.php");
        exit();
    }
    else
        header("Location: dangnhap.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gio hang</title>
</head>
<body>
	<h1>Giỏ hàng</h1>
</body>
</html>

