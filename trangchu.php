<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<style>
  .product_best:hover{
    width: 100%;
    height: 183px;
    background-color: green;
    border-radius: 100%;
    padding: 1px;
  }
  .col-md-2 img{
    width: 100%;
    height: 180px;
    border-radius: 100%;
  }
  .product_best_1:hover{
    width: 100%;
    height: 183px;
    background-color: green;
    border-radius: 100%;
    padding: 1px;
  }
  .col-sm-2 img{
    width: 100%;
    height: 180px;
    border-radius: 100%;
  }
  .col-md-2 img:hover {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
  img { vertical-align:middle; }

  .col-md-12{
    border-radius: 10px;
    margin: 30px 0 0 0;
  }
  .col-md-12:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 8px;
  color: #008000;
  font-weight: 500; 
}
.thumbnail {
    
    overflow: hidden;
    position: relative;
    
}
.thumbnail img {
    max-width: 100%;
    transition: all 1s;
    -webkit-transform: scale(1);
            transform: scale(1);
}
.thumbnail:hover img {
  opacity: 0.5;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
}
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
    width: 265px;
    height: 340px;
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
.category-item-link{
    color: black;
}

.category-item-link:hover{
  color: #5F9EA0;
  text-decoration: none;
  background-color: #F0F0F0;

}
.btn-viewmore-tab.text-center {
  margin-top: 20px; }

#hotline {
  position: fixed;
  bottom: 40px;
  left: 40px;
  z-index: 999999999;
  display: flex;
  align-items: center;
  width: 60px;
  border-radius: 50%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); }

#hotline > a {
  display: inline-block;
  text-align: center;
  background: #0f75bc;
  color: #ffffff;
  width: 60px;
  font-size: 24px;
  line-height: 60px;
  border-radius: 50%;
  box-shadow: 0 0 0 0 rgba(15, 117, 188, 0.3);
  -webkit-animation: pulse 1.5s infinite;
  transition: all .3s; }

@-webkit-keyframes shake {
  0% {
-webkit-transform: rotateZ(5deg);
    -moz-transform: rotateZ(5deg);
    -ms-transform: rotateZ(5deg);
    transform: rotateZ(5deg); }
  25% {
    -webkit-transform: rotateZ(-5deg);
    -moz-transform: rotateZ(-5deg);
    -ms-transform: rotateZ(-5deg);
    transform: rotateZ(-5deg); }
  50% {
    -webkit-transform: rotateZ(5deg);
    -moz-transform: rotateZ(5deg);
    -ms-transform: rotateZ(5deg);
    transform: rotateZ(5deg); }
  75% {
    -webkit-transform: rotateZ(-5deg);
    -moz-transform: rotateZ(-5deg);
    -ms-transform: rotateZ(-5deg);
    transform: rotateZ(-5deg); } }

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9); }
  70% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    box-shadow: 0 0 0 50px rgba(15, 117, 188, 0); }
  100% {
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
    box-shadow: 0 0 0 0 rgba(15, 117, 188, 0); } }

#hotline .text-quotes {
  display: inline-block;
  width: 0px;
  height: 60px;
  transition: all .2s;
  overflow: hidden;
  text-align: center; }

#hotline .text-quotes a {
  display: block;
  margin: auto;
  line-height: 60px;
  font-size: 18px;
  width: 100%;
  font-weight: bold;
  color: #2c394c; }

#hotline .text-quotes a:hover {
  color: #0f75bc; }

#hotline:hover {
  width: 200px;
  border-radius: 40px;
  overflow: hidden;
  background: #fff; }

#hotline:hover > a {
  -webkit-animation: none;
  border-radius: 4px; }

#hotline:hover .text-quotes {
  width: calc(100% - 50px); }
 


 element.style {
}
.backtop.show {
    position: fixed;
    z-index: 999;
    transition: all 0.3s ease-out 0s;
    transform: translateY(0px);
    opacity: 1;
    visibility: visible;
}
.show:not(.hidden) {
    display: block;
    color: white;
}
.backtop {
    position: absolute;
    right: 10px;
    bottom: 60px;
    font-size: 14px;
    cursor: pointer;
    color: #fff;
    top: auto !important;
    height: 40px;
    width: 40px;
    background-color: #537f44;
    border: 2px solid #fff;
    line-height: 36px;
    border-radius: 4px;
    font-size: 20px;
    transition: all 0.3s ease-out 0s;
    transform: translateY(-120px);
    opacity: 0;
    visibility: hidden;
    text-align: center;
}
a {
    color: #3a445e;
}
.form-control:focus, a, button, .page-link:focus, .btn, .btn:focus {
    outline: none !important;
    box-shadow: none;
}
a {
    color: #ffffff;
    text-decoration: none;
    background-color: transparent;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
  }
</style>
</head>
<body>
    <?php include("header.php");
          include("slideshow.php");
     ?>
<div class="container-fluid text-center bg-grey">
  <div id="giohang">
      <?php
            $ok=1;
            if (isset($_SESSION['giohang'])) {
              foreach ($_SESSION['giohang'] as $k=>$v) {
                if (isset($v)) {
                  $ok=2;
                }
              }
            }
            if ($ok!=2) {
              //echo '<p>Giỏ hàng của bạn trống</p>';
            }
            else
            {
              $items = $_SESSION['giohang'];
echo '<p>Bạn đang có <a href="giohang.php">'.count($items).'món hàng trong giỏ hàng </a></p>';
            }
        ?>
    </div>  
      <h2 style="font-family: Courier new; margin: 50px 0 30px 0; color: green;">NỔI BẬT <i class="fas fa-spa"></i></h2>
      <div class="col-lg-12">
        <div class="row">
          <?php
          $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    $sql = "SELECT *FROM hanghoa LIMIT 1,6";
    $ketqua1 = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($ketqua1)) {
            echo '<div class="col-md-2">';
            echo '<div class="product_best">';
            echo'<a href="chitietSP.php?id=' .$row['id'] .' ">'.'<img src="'.$row['hinhanh'].'">'.'</a>';
            echo '</div>';
            echo '</div>';
          }
            ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6"><img src="img/anh7.jpg" style="width: 600px;"></div>
          <div class="col-md-6">
            <h2 style="font-family: Courier new; text-align:center; margin: 50px 0 30px 0; color: green;">ĐÔI NÉT VỀ CHÚNG TÔI <i class="fab fa-canadian-maple-leaf"></i></h2>
          Xin chào bạn, THẾ GIỚI RAU SẠCH mong muốn tạo dựng một cộng đồng thực phẩm sạch, dựa trên nền tảng hữu cơ (organic) và thuần từ thiên nhiên, nhằm mang lại sức khoẻ tốt nhất cho cộng đồng.</div>
        </div>
      </div>
  <h2 style="font-family: Courier new; margin: 50px 0 30px 0; color: green;">THẾ GIỚI RAU SẠCH <i class="fas fa-seedling" style="color: green;"></i></h2>
  <div class="row text-center slideanim">
    <?php  
    $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    $sql = "SELECT *FROM danhmuc";
    $ketqua = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($ketqua)) {
    echo'<div class="col-sm-4">';
      echo'<div class="thumbnail">';
        echo'  <a href="tk_danhmuc.php?iddanhmuc=' .$row['id'] .' ">'.'<img src="'.$row['hinhanh'].'" style="width: 100%; height: 300px;">'.'</a>';
      echo'</div>';
      echo '<p class="category-item-link">'.'<strong>'.$row['danhmuc'].'</p>'.'</strong>';
    echo'</div>';
  }
    ?>
    
  </div>
  <h2 style="font-family: Courier new; margin: 50px 0 30px 0; color: green;">NHÀ CUNG CẤP <i class="fas fa-home"></i></h2>
  <div class="col-lg-12">
        <div class="row">
          <div class="col-sm-2">
          <div class="product_best_1">
          <a href="#"><img src="img/ncc1.png"></a>
          </div>
          </div>
          <div class="col-sm-2">
          <div class="product_best">
          <a href="#"><img src="img/ncc2.jpg"></a>
          </div>
          </div>
          <div class="col-sm-2">
          <div class="product_best">
          <a href="#"><img src="img/ncc3.jpg"></a>
          </div>
          </div>
          <div class="col-sm-2">
          <div class="product_best">
          <a href="#"><img src="img/ncc4.png"></a>
          </div>
          </div>
          <div class="col-sm-2">
          <div class="product_best">
          <a href="#"><img src="img/ncc5.jpg"></a>
          </div>
          </div>
          <div class="col-sm-2">
          <div class="product_best">
          <a href="#"><img src="img/ncc6.jpg"></a>
          </div>
          </div>
        </div>
      </div>

  <h2 style="font-family: Courier new; margin-top: 50px; color: green;">SẢN PHẨM CỦA CHÚNG TÔI <i class="fas fa-leaf" style="color: green;"></i></h2><br>
  
     <?php 
        
        $conn = mysqli_connect('localhost', 'root', '', 'doan_cuoiky');
 
        $result1 = mysqli_query($conn, 'select count(id) as total from hanghoa');
        $row = mysqli_fetch_assoc($result1);
        $total_records = $row['total'];
 
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 4;
 
        
        $total_page = ceil($total_records / $limit);
 
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        $start = ($current_page - 1) * $limit;
 
        
        $result = mysqli_query($conn, "SELECT * FROM hanghoa LIMIT $start, $limit");
        ?>
        <div>
            <?php
            echo '<div class="container"';
            echo '<div class="col-lg-12">';
            echo '<div class="row">'; 
            
            while ($row = mysqli_fetch_assoc($result)){
                $dongia = $row['dongia'];
            echo '<div class="col-md-3">';
            echo '   <div class="product">';
            echo '      <div class="product-item"><a href="chitietSP.php?id=' . $row['id'] . '"><img src="'.$row['hinhanh'].'" style="width: 100%; height: 220px;"></a>';
            echo '      </div>';
            echo '      <div class="product-item-card" style="margin: 10px 0 0 10px;">';
            echo '         <h4>'.$row['tenhang'].'</h4>';
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
            ?>
        </div>
        <div class="pagination-center" style="font-size: 30px ; text-align: center; margin-bottom: 30px;">
           <?php 
            
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?page='.($current_page-1).'" class="btn btn-success"><i class="fas fa-caret-left"></i></a> | ';
            }
 
            for ($i = 1; $i <= $total_page; $i++){
                
                if ($i == $current_page){
                    echo '<span class="btn btn-secondary">'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?page='.$i.'" class="btn btn-success">'.$i.'</a> | ';
                }
            }
 
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?page='.($current_page+1).'" class="btn btn-success"><i class="fas fa-caret-right"></i></a> ';
            }
           ?>
        </div>

<div id="hotline">
  <a href="tel:0987635141" id="myBtn" class="openSize">
    <i class="fa fa-phone" aria-hidden="true">
  </i>
  </a>
  <div class="text-quotes">
    <a href="tel:0987635141">0987635141</a>
  </div>
</div>
<a href="#" id="back-to-top" class="backtop back-to-top show" title="Lên đầu trang"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<?php include("hotro.php"); 
      include("footer.php");
?>
</div>
</body>
</html>

