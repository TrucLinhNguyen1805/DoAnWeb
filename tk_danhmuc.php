<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tim kiem danh muc</title>
  <style>

.product-item {
    overflow: hidden;
    position: relative;
    border-radius: 8px;
}
.product img {
  border-radius: 8px;
    max-width: 100%;
    transition: all 1s;
    -webkit-transform: scale(1);
            transform: scale(1);
}
.product:hover img {
  border-radius: 8px;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
}
.product:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 8px;
  color: #008000; 
}
.product{
  padding: 2px;
  background: #66CDAA ;
    width: 235px;
    height: 296px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.price{
display: inline-block;
padding: 0px 15px; 
height: 40px; 
line-height: 40px; 
background: #c0c906; 
color: #fff; 
float: left; 
border-top-left-radius: 10px; 
position: relative; 
z-index: 2;
}
.cart a{
display: inline-block;
padding: 0px 15px; 
margin-left: 0;
height: 40px; 
line-height: 40px; 
background: #3CB371 ; 
color: #fff; 
float: left; 
border-top-right-radius: 10px; 
position: relative; 
z-index: 2;
}
.cart a:hover{
  background: #6B8E23;
  color: white;
}
  </style>
</head>
<body>
  
  <?php include("header.php") ;
    echo '<div class="container-fluid text-center" style=" margin: 90px 0 90px 0;"';
      echo '<div class="col-lg-12">';
        echo '<div class="row">';
        include("form_danhmuc.php");
          echo'<div class="col-lg-10">';
            echo '<div class="row">';
            $iddanhmuc = $_GET['iddanhmuc'];
            $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
            $sql = "SELECT * FROM hanghoa WHERE iddanhmuc=$iddanhmuc";
    
            $ketqua = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($ketqua)) {
            $dongia = $row['dongia'];
            echo '<div class="col-md-3">';
            echo '   <div class="product">';
            echo '      <div class="product-item"><a href="chitietSP.php?id=' . $row['id'] . '"><img src="'.$row['hinhanh'].'" style="width: 230px; height: 180px;"></a>';
            echo '      </div>';
            echo '      <div class="product-item-card" style="margin: 10px 0 0 10px;">';
            echo '         <h5>'.$row['tenhang'].'</h5>';
            include("ratings.php");
            echo '         <div class="action">';
            echo '           <div class="price">';
            echo '             Giá: '.number_format($dongia,3).' VND';
            echo '           </div>';
            echo '           <div class="cart">';
            echo '             <a href="themvaogio.php?idhang=' . $row['id'] . '" style="text-decoration: none;"><i class="fas fa-shopping-cart"></i></a>';
            echo '           </div>';
            echo '         </div>';
            echo '      </div>';
            echo '   </div>';
            echo '</div>';
        }
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo '</div>';  
    include("footer.php");
    ?>
</body>
</html>
