<?php
    session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $hoten = $_POST['hoten'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
  $sql = "INSERT INTO users (hoten, username, password, role) VALUES ('$hoten', '$username', '$password', 'user')";
  $ketqua = mysqli_query($conn, $sql);
  header("Location: dangnhap.php");
 }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng ký</title>
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
.banner-sec{background:url(http://vinanet.vn/Uploaded/phuongthuy/2020_07_23/nong_san_xuat_khau_sang_thai_NPVL.jpg )  no-repeat left bottom; background-size:cover; min-height:300px; border-radius: 0 10px 10px 0; padding:0;}
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
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}


</style>
</head>
<body>  
<?php  include("header.php");  ?>

<section class="login-block" style="margin-top: 120px;">
    <div class="container">
  <div class="row">
    <div class="col-md-7 login-sec">
        <h2 class="text-center">ĐĂNG KÝ</h2>
<form action="" method="POST">
    <div class="col-sm-12 form-group">
    <label>Tên đăng ký:</label>
    <p><input type="text" name="hoten" placeholder="Name" class="form-control"></p>
    <label>Tài khoản:</label>
    <p><input type="text" name="username" placeholder="Username" class="form-control"></p>
    <label>Mật khẩu:</label>
    <p><input type="password" name="password" placeholder="Password" class="form-control"></p>
    <p><label>Giới tính:</label>
    <input type="radio" name="gender" value="male">Nam
    <input type="radio" name="gender" value="female">Nữ</p>
    <p><label>Năm sinh:</label>
    <select name="age">
      <option value="1999">1999</option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
    </select></p>
    <p><button type="submit" class="btn btn-success">Đăng ký</button></p>
  </div>
 
  </form>
<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">thegioirausach2002.com</a></div>
    </div>
    <div class="col-md-5 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="http://vinanet.vn/Uploaded/phuongthuy/2020_07_23/nong_san_xuat_khau_sang_thai_NPVL.jpg" style="width: 100%; height: 580px;" alt="First slide">
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
