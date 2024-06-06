<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <style>
    #form_1{
        font-family: courier;
        font-size: larger; 
        width: 500px; margin: 0 380px 0 380px; background-color: #8FBC8F ; padding: 10px; border-radius: 10px; color: white;
    }

    </style>
</head>
<body>
    <?php include("header.php") ?>
    <div class="container-fluid">
    <h4 style="margin-top: 60px; text-align: center;"><strong>THÔNG TIN ĐẶT HÀNG</strong></h4>
    <?php
        
    if (isset($_SESSION['username'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $iduser = $_SESSION['id'];
  $hoten = $_POST['hoten'];
  $sodienthoai = $_POST['sodienthoai'];
  $diachi = ($_POST['diachi']);
  $hinhthucthanhtoan = ($_POST['hinhthucthanhtoan']);  
  //$conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
  $iduser = $_SESSION['id'];
        $dongia = $_SESSION['dongia'];
        $ngaymua = date("Y/m/d");
        //echo $ngaymua;

        $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
        $sql = "INSERT INTO donhang(iduser, ngaymua, tongtien, trangthai) VALUES ($iduser, $ngaymua, 0, 'Mới')";
        $ketqua2 = mysqli_query($conn, $sql);
        $id = mysqli_insert_id($conn);
        echo "ID đơn hàng: ". $id;

        foreach ($_SESSION['doan_cuoiky'] as $key => $value) {
            $sql = "INSERT INTO orders (iddonhang, iduser, hoten, sodienthoai, diachi, hinhthucthanhtoan) VALUES ($id, $iduser, '$hoten', '$sodienthoai', '$diachi', '$hinhthucthanhtoan')";
            $ketqua1 = mysqli_query($conn, $sql);
            $sql = "INSERT INTO chitietdonhang(iddonhang, idhanghoa, soluong, dongia) VALUES($id, $key, $value, $dongia)";
            $ketqua2 = mysqli_query($conn, $sql);

            $sql = "UPDATE hanghoa SET soluong= soluong - $value WHERE id = $key";
            $ketqua3 = mysqli_query($conn, $sql);
        }
}
        echo '<form action="" method="POST" id="form_1">';
        echo '<p>';
        echo '<strong>Họ tên</strong>';
        echo '<input type="text" name="hoten" class="form-control" required>';
        echo '</p>';
        echo '<p>';
        echo '<strong>Số điện thoại</strong>';
        echo '<input type="tel" name="sodienthoai" class="form-control" required>';
        echo '</p>';
        echo '<p>';
        echo '<strong>Địa chỉ</strong>';
        echo '<input type="text" name="diachi" class="form-control" required>';
        echo '</p>';
        echo '<p>';
        echo '<strong>Hình thức thanh toán</strong><br>';
        echo '<input type="radio" name="hinhthucthanhtoan" value="offline"> Thanh toán trực tiếp khi nhận hàng'.'<br>';
        echo '<input type="radio" name="hinhthucthanhtoan" value="online"> Chuyển khoản'.'<br>';
        echo '</p>';
        echo '<center><button type="submit" class="btn btn-success">Đặt hàng</button></center>';
        echo '</form>';
        if (isset($iduser)) {
            echo '<a href="xoahang.php?idhang=0" class="btn btn-primary">Xác nhận</a>';
        }
    }
    else
        header("Location: dangnhap.php");
      ?>
    </div>
</body>
</html>


