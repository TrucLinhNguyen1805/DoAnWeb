<?php
    session_start();
    if(isset($_POST['submit']))
    {
        foreach($_POST['soluong'] as $key=>$value)
        {
            if( ($value == 0) and (is_numeric($value)))
            {
                unset ($_SESSION['doan_cuoiky'][$key]);
            }
            else if(($value > 0) and (is_numeric($value)))
            {
                $_SESSION['doan_cuoiky'][$key]=$value;
            }
        }
        header("location:giohang.php");

    } 
?>
<html>
<head>
    
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        background-color: #E0E0E0;
    }
    h1{
        color: FF0066;
        margin-top: 0;
        padding: 10px;
        background-color: white;
    }
    .col-lg-12{
        background-color: white;
        margin-bottom: 10px;
        border-radius: 5px;
        padding: 10px;
        align-items: center;
    }
    .col-md-12 {
position: sticky;
background: white;
color: #000;
font-weight: bold;
height: 50px;
line-height: 50px;
bottom: 0;
border-radius: 5px;
}

</style>
</head>
<body>
    <center><h1>Giỏ hàng</h1></center>
    <form action="" method="POST">
    <div class="container">
    
        <?php  
        $ok=1;
        if (isset($_SESSION['doan_cuoiky'])) {
            foreach ($_SESSION['doan_cuoiky'] as $key => $value) {
                if (isset($key)) {
                    $ok=2;
                }
            }
        }
        if ($ok==2) {
            echo "<form action='giohang.php' method='POST'>";
            foreach($_SESSION['doan_cuoiky'] as $key=>$value)
            {
                $item[]=$key;
            }
            $str= implode(",",$item);
    $conn = mysqli_connect("localhost","root","","doan_cuoiky");
    $sql = "SELECT * FROM hanghoa WHERE id in ($str)";
    $ketqua = mysqli_query($conn, $sql);

    echo '<div class="col-lg-12">
    <div class="col-sm-3">SẢN PHẨM</div>
    <div class="col-sm-3">GIÁ</div>
    <div class="col-sm-3">SỐ LƯỢNG</div>
    <div class="col-sm-3">CHỨC NĂNG</div>
    </div>';
        $tongtien = 0;
        $thanhtien = 0;
    while($row=mysqli_fetch_array($ketqua))
    {
        $thanhtien = $row['dongia'] * $_SESSION['doan_cuoiky'][$row['id']];
        $tongtien = $tongtien + $thanhtien;

        $_SESSION['dongia'] = $row['dongia'];
        //echo "GIÁ= " .$_SESSION['dongia'];
        //echo $_SESSION['doan_cuoiky'][$row['id']];
        $dongia = $row['dongia'];
        echo '<div class="col-lg-12">';
        echo '<div class="col-sm-3">';
        echo '<img src="'.$row['hinhanh'].'" style="width: 80px;height: 80px;">';
echo '<h4>'.$row['tenhang'].'</h4>';
echo '</div>';
        echo '<div class="col-sm-3">';
        echo number_format($dongia,3).' VND';
        echo '</div>';
        echo '<div class="col-sm-3">';
        
            echo "<p> <input style='text-align:center' type='text' name='soluong[$row[id]]' size='5' value='{$_SESSION['doan_cuoiky'][$row['id']]}' >  ";
       
        echo '</div>';
        echo '<div class="col-sm-3">';
        echo '<a href="xoahang.php?idhang=' . $row['id'] . '" class="btn btn-warning">Xóa</a>';
        echo '</div>';
        echo '</div>';
    }
    echo '
    <div class="col-md-12">
    <div class="col-sm-3"><a href="trangchu.php" class="bi bi-bag-check-fill" style="text-decoration: none;"><i class="fa fa-arrow-left"></i> Tiếp tục mua sắm</a>
    </div>
    <div class="col-sm-3">'.number_format($tongtien,3).' VND
    </div>
    <div class="col-sm-2" style="margin-top:8px;"><input type="submit" name="submit" class="btn btn-info" value="Cập nhật" >
    </div>
    <div class="col-sm-2"><a href="xoahang.php?idhang=0" style="text-decoration: none;"><i class="fa fa-trash"></i> Xóa giỏ hàng</a>
    </div>
    <div class="col-sm-2" style="margin-top:8px;"><a href="thanhtoan.php" style="text-decoration: none;" class="btn btn-danger">Thanh toán</a>
    </div>
    </div>
    ';
        }
        else
        {
            echo '<h4>GIỎ HÀNG TRỐNG</h4>';
            echo '<a href="trangchu.php"><span class="glyphicon glyphicon-repeat"></span> Quay lại trang chủ</a>';
        }
    ?>
    
    
    </div>
    </form>
   
</body>
</html>

