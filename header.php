<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style>
.search{
  border: inset;
  width: 100%;
  height: 40px;
  border-radius: 5px;
  background-color: white;
  display: flex;
  align-items: center;}
.search-btn{
  flex: 1;
  background-color: #4682B4 ;
  border: none;
  height: 34px;
  width: 40px;
  border-radius: 3px;
  margin-right: 3px;

}
.search-btn:hover{
  cursor: pointer;
  background-color: #A4D3EE;
}
input{
  border: none;  outline: none; padding: 0 16px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-white fixed-top" style="font-family: 'Trebuchet MS', sans-serif;">
  <a href="#"><img src="img/logo.jpg" alt="" style="width: 150px; margin-left: 20px;"></a>
  <ul class="navbar-nav nav-link">
    <li class="nav-item">
      <a class="nav-link" href="trangchu.php">TRANG CHỦ</a>
    </li>
    <li class="nav-item">
      <?php  
    $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    $sql = "SELECT *FROM danhmuc";
    $ketqua = mysqli_query($conn, $sql);
    echo '<div class="w3-dropdown-hover" style="background-color: white;">';
    echo '<a class="nav-link" href="trangSP.php">SẢN PHẨM</a>';
    echo'<div class="w3-dropdown-content w3-bar-block w3-card-4">';
        while ($row = mysqli_fetch_array($ketqua)) {
        echo'  <a href="tk_danhmuc.php?iddanhmuc=' .$row['id'] .' " class="w3-bar-item w3-button nav-link">'.$row['danhmuc'].'</a>';
      }
    echo'</div>';
    echo'</div>';
  ?>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tintuc.php">TIN TỨC</a>
    </li>
  </ul>
  <ul class="navbar-nav nav-search">
    <li class="nav-item">
    <form action="tim_kiem.php" method="GET">
      <div class="search">
        <div class="search-item">
          <input type="text" name="tim_kiem" placeholder="Nhập từ bạn cần tìm">
        </div>
          <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
      </div>
    </form>
    </li>
    <?php
        if (isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
          echo '<div class="w3-dropdown-hover" style="background-color: white;">';
          echo '<li class="nav-item" style="margin-left: 20px;">
      <a class="nav-link" href=""><img src="img\avartar.jpg" alt="Avartar" class="image" style="width:40px; height: 40px; margin-right: 5px; border-radius: 100px; "><span>'.$_SESSION['username'].'</span></a>
    </li>';
          echo'<div class="w3-dropdown-content w3-bar-block w3-card-4">';
        echo '<a href="dangxuat.php" class="w3-bar-item w3-button nav-link">Đăng xuất</a>';
        if (isset($_SESSION['role'])) 
    
      if ($_SESSION['role'] == 'admin')
          echo '<a href="qly_user.php" class="w3-bar-item w3-button nav-link">TRANG QUẢN TRỊ</a>';
        echo'</div>';
          echo'</div>';
  }
        else
          echo '<li class="nav-item" style="margin-left: 20px;">
      <a class="nav-link" href="dangnhap.php"><i class="fas fa-user" style="width: 40px; height: 40px; line-height: 40px; text-align: center; border-radius: 100%; background: green; color: #ffffff; margin-right: 5px;"></i><span>ĐĂNG NHẬP</span></a>
    </li>';
    ?>
    <li class="nav-item" style="margin-left: 20px;">
      <a class="nav-link" href="giohang.php"><i class="fas fa-cart-plus" style="width: 40px; height: 40px; line-height: 40px; text-align: center; border-radius: 100%; background: green; color: #ffffff;"></i></a>
    </li>
    
  </ul>
</nav>
</body>
</html>
