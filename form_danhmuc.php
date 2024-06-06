<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danhmuc</title>
  <style>
    
     .category{
  font-family: arial ;
 padding: 15px;
  border-radius: 5px;
  background-color: #F0F0F0;
  text-align: left;
  font-size: 1.4rem;
  padding: 12px 16px;

}
.category-list{
  padding: 0 0 8px 0;
  list-style-type: none;
  margin-left: 9px
    text-align: left;
}
.category-item--active .category-item__link{
  color: #4682B4;
}
.category-item--active .category-item__link::before{

  position: absolute;
  top: 50%;
  left: 8px;
  content: "";
  border: 4px solid;
  transform: translateY(calc(-50% - 1px));
  border-color: transparent transparent transparent #00B2EE;
}
.category-item-link{
    color: blue;
    position: relative;
  font-size: 1.2rem;
  color: black;
  font-size: 1.2rem;
  text-decoration: none;
  padding: 6px 10px;
  display: block;
  transition: right linear 0.1s;
  right: 0;
}

.category-item-link:hover{
  color: #5F9EA0;
  text-decoration: none;
  background-color: #F0F0F0;

}
  </style>
</head>
<body>
  <?php  
    $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    $sql = "SELECT *FROM danhmuc";
    $ketqua = mysqli_query($conn, $sql);
    echo'<div class="col-lg-2">';
      echo'<form action="" class="category">';
        echo'<h4>Danh mục </h4>';
        echo '<hr>';
        echo'<ul class="category-list">';
        while ($row = mysqli_fetch_array($ketqua)) {
        echo'<li class="category-item category-item--active">';
        echo '<p>';
        echo'  <a href="tk_danhmuc.php?iddanhmuc=' .$row['id'] .' " class="category-item-link">'.$row['danhmuc'].'</a>';
        echo '</p>';
        echo'</li>';
      }
        echo'</ul>';
      echo'</form>';
    echo'</div>';
  ?>
</body>
</html>

