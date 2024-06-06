<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng nhập</title>
   <!--important link source from "https://bootsnipp.com/snippets/GlaW2"-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
  @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background:#68de62;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #c5e17e, #68de62);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #c5e17e, #68de62); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(http://vinanet.vn/Uploaded/phuongthuy/2020_07_23/nong_san_xuat_khau_sang_thai_NPVL.jpg )  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#52ed3e;}
.login-sec .copy-text a{color:#52ed3e;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #6b6968;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#c5e17e; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #429c36; color:#fff; font-weight:600;}
.banner-text{width:50%; position:absolute; bottom:30px; padding-left:5px; margin-right: 50%;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:10px; border-radius:3px;}
.banner-text p{color:#fff;}
</style>
</head>
<body>  
<?php  include("header.php");  ?>

<section class="login-block" style="margin-top: 120px;">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">ĐĂNG NHẬP</h2>
       <form action="dangnhap.php" method="POST">

  <div class="form-group">
    <label for="exampleInput" class="text-uppercase">Tài khoản</label>
    <input type="text" class="form-control" name="username" placeholder="" required="Thông tin bắt buộc">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Mật khẩu</label>
    <input type="password" class="form-control" name="password" placeholder="" required="Thông tin bắt buộc">
  </div>
  
  
    <div class="form-check">
<label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Nhớ mật khẩu</small>
    </label>
    <button type="submit" class="btn btn-success float-right" onclick="myFunction()">Submit</button>
  </div>
   <div style="text-align: center; margin-top: 20px;">
    <a href="dangky.php" style="color: green; text-decoration: none;">ĐĂNG KÝ</a>
  </div>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
  $sql = "SELECT *FROM users WHERE username = '$username' AND password = '$password'";
  $ketqua = mysqli_query($conn, $sql);
  $soluong = 0;
  if (isset($ketqua))
    $soluong = mysqli_num_rows($ketqua);
  if ($soluong>0) {
    $row = mysqli_fetch_array($ketqua);
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $row['role'];
    $_SESSION['id'] = $row['id'];
    //echo $username . '<br>';
    //echo "ID= " .$_SESSION['id'];
    
      echo 'Bạn đã đăng nhập thành công!';
  }
  else
    echo 'Tên đăng nhập hoặc mật khẩu không đúng';
    
 }
   ?>
<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">thegioirausach2002.com</a></div>
    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="http://vinanet.vn/Uploaded/phuongthuy/2020_07_23/nong_san_xuat_khau_sang_thai_NPVL.jpg" style="width: 100%" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Thế giới rau sạch</h2>
            <p>Chuyên cung cấp tất cả các mặt hàng rau củ quả sạch, không chất bảo quản, an toàn cho sức khỏe, đáp ứng nhu cầu của tất cả khách hàng.</p>
        </div>  
  </div>
    </div>
    
            </div>     
        
    </div>
  </div>
</div>
</section> 
</body>
</html>

