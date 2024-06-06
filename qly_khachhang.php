<?php  
     session_start();

    if (isset($_SESSION['role'])) {
    	 if ($_SESSION['role'] != 'admin')
      header("Location: dangnhap.php");
    }
  else
  
    header("Location: dangnhap.php");
  
   

?> 

<html >
<head>
  <title>Danh sách khách hàng</title>
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
       <p><a href="qly_donhang.php">QUẢN LÝ ĐƠN HÀNG</a></p>
        <p><a href="qly_chitietdonhang.php">QUẢN LÝ CHI TIẾT ĐƠN HÀNG</a></p>
      <p><a href="qly_binhluan.php">QUẢN LÝ BÌNH LUẬN</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
  
	<div class="container" style="margin-top: 20px;width: 1000px;">
		<div class="row">
			
			<div class="col-md-14">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">DANH SÁCH KHÁCH HÀNG</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>ID Đơn hàng</th>
									<th>ID User</th>
									<th>Họ tên</th>
                  <th>Số điện thoại</th>
									<th>Địa chỉ</th>
									<th>Hình thức thanh toán</th>
									
								</tr>
							</thead>

		
							<?php 
								$stt=1;
								$conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
								$sql = "SELECT * FROM orders";
								$ketqua = mysqli_query($conn, $sql);
								while ($row=mysqli_fetch_array($ketqua)) {
								 	echo '<tr>';
									echo '<td>'.$row['id'].'</td>';
									echo '<td><a href="qly_donhang.php?iddonhang= '.$row['id'].'">'.$row['iddonhang'].'</a></td>';
									echo '<td>'.$row['iduser'].'</td>';		
									echo '<td>' .$row['hoten']. '</td>';
									echo '<td>' .$row['sodienthoai']. '</td>';
									echo '<td>' .$row['diachi']. '</td>';
									echo '<td>' .$row['hinhthucthanhtoan']. '</td>';
									echo '</tr>';
									$stt++;
								 }
								 mysqli_close($conn);
							?>
						</table>
						
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
</div>
</div>
</body>
</html>