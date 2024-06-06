<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$tenhang = $_POST['tenhang'];
    	$soluong = $_POST['soluong'];
    	$dongia = $_POST['dongia'];
    	$hinhanh = $_POST['hinhanh'];
    	$mota = $_POST['mota'];
    	$iddanhmuc = $_POST['iddanhmuc'];

    	$conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    	$sql = "INSERT INTO hanghoa (tenhang, soluong, dongia, hinhanh, mota, iddanhmuc) VALUES ('$tenhang', '$soluong', '$dongia', '$hinhanh', '$mota', '$iddanhmuc')";
    	$ketqua= mysqli_query($conn, $sql);
    	mysqli_close($conn);
    	header("Location: qly_danhmuc.php");
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Them san pham</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <div class="container" style="margin-top: 50px; width: 500px; padding: 20px;">
	<div class="form-group" style="background-color: #E8E8E8; border-radius: 5px; padding: 30px;">
	<center><h1 style="color: #008080;">Thêm sản phẩm</h1></center>
	<form action="" method="POST">
		<p><label>Tên hàng:</label>
		<input type="text" class="form-control" name="tenhang"></p>
		<p><label>Số lượng:</label>
		<input type="text" class="form-control" name="soluong"></p>
		<p><label>Đơn giá:</label>
		<input type="text" class="form-control" name="dongia"></p>
        <p><label>Mô tả:</label>
		<input type="text" class="form-control" name="mota"></p>		
		<p><label>ID danh mục:</label>
		<input type="text" class="form-control" name="iddanhmuc"></p>
		<p><label>Hình ảnh:</label>
		<input type="file" name="hinhanh" id="hinhanh"></p>
		</p><input type="submit" value="Thêm sản phẩm" name="submit" class="btn btn-success"></p>	
	</form>
	</div>
	</div>
</div>
</div>
</div>
</body>
</html>