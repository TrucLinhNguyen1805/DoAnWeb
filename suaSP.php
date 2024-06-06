<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id = $_GET['id'];
        $tenhang = $_POST['tenhang'];
        $soluong = $_POST['soluong'];
        $dongia = $_POST['dongia'];
        $hinhanh = $_POST['hinhanh'];
        $mota = $_POST['mota'];

        $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
        $sql = "UPDATE hanghoa SET tenhang='$tenhang', soluong='$soluong', dongia='$dongia', hinhanh='$hinhanh', mota ='$mota' WHERE id='$id'";
        $ketqua = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: qly_danhmuc.php");
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua san pham</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 600px;}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: #555;">
    <div class="navbar-header">
      
     <a href="#"><img src="img/logo.jpg" alt="" style="width: 100px; margin-left: 20px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li><a href="trangchu.php">TRANG CHỦ</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color: white;"> Xin chào Admin!</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
     <div class="col-sm-2 sidenav" style="text-align: left;">
      <p><a href="qly_danhmuc.php">QUẢN LÝ DANH MỤC</a></p>
      <p><a href="qly_user.php">QUẢN LÝ NGƯỜI DÙNG</a></p>
      <p><a href="qly_khachhang.php">QUẢN LÝ KHÁCH HÀNG</a></p>
       <p><a href="qly_donhang.php">QUẢN LÝ DANH SÁCH ĐƠN HÀNG</a></p>
        <p><a href="qly_chitietdonhang.php">QUẢN LÝ CHI TIẾT ĐƠN HÀNG</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
    <div class="container" style="margin-top: 20px; width: 500px; padding: 20px;">
    <div class="form-group" style="background-color: #E8E8E8; border-radius: 5px; padding: 30px;">
    <center><h1>Sửa sản phẩm</h1></center>
    <?php
        $conn2 = mysqli_connect("localhost", "root", "", "doan_cuoiky");
        $sql2 = "SELECT * FROM hanghoa WHERE id=".$_GET['id'];
        //echo $sql2;
        $ketqua = mysqli_query($conn2, $sql2);
        $thongtinsp = mysqli_fetch_array($ketqua);
      ?>
      <form action="" method="POST">
        <p><label>Tên hàng:</label>
            <input type="text" name="tenhang" class="form-control" value="<?php echo $thongtinsp['tenhang'];  ?>"></p>
        <p><label>Số lượng:</label>
            <input type="text" name="soluong" class="form-control" value="<?php echo $thongtinsp['soluong'];  ?>"></p>
        <p><label>Đơn giá:</label>
            <input type="text" name="dongia" class="form-control" value="<?php echo $thongtinsp['dongia'];  ?>"></p>
        <p><label>Hình ảnh:</label>
            <input type="text" name="hinhanh" class="form-control" value="<?php echo $thongtinsp['hinhanh'];  ?>"></p>
        <div class="form-group"><label>Mô tả:</label>
            <textarea name="mota"></textarea>
                <script>
                    CKEDITOR.replace( 'mota' );
                    CKEDITOR.instances['mota'].setData("<?php echo $thongtinsp['mota'];  ?>");
                </script>
        </div>
        <input type="submit" name="submit" class="btn btn-success" value="Sửa thông tin sản phẩm">
      </form>
      </div>
    </div>
</div>
</div>
</div>
</body>
</html>