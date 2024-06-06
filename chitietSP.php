<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>binhluan</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#btnGui").click(function(){
        $.post("thembinhluan.php",
        {
          username: $("#username").val(),
          noidung: $("#noidung").val(),
          idhanghoa: $("#idhanghoa").val(),
          thoigian: $("#thoigian").val(),
        },
        function(data,status){
          //alert("Data: " + data + "\nStatus: " + status);
          $("#danhsachbinhluan").append("<p>" + $("#username").val() + ' :' + $("#noidung").val()+ "<br>"+ $("#thoigian").val() + "</p>");
          $("#username").val('');
          $("#noidung").val('');
          $("#thoigian").val('');          
        });
      });
    });
</script>
<style>
  .container{
    padding: 20px;
    font-family: Arial;
    background-color: #F0F0F0  ;
  }
  .row{
    margin: 15px;
  }
  .col-sm-2{
border-top-right-radius: 10px;
 border-top-left-radius: 10px;
 background-color: green;
 color: white;
 height: 40px;
 text-align: center; 
padding: 1px;
  }
  .item ,.col-sm-12{
    padding: 30px;
    border-radius: 10px;
  background-color: #FFFFFF ;
  }

  .product-page .qty-addcart {
    line-height: 2;
    display: inline-flex;
    padding-top: 15px;
}
.js-qty, .ajaxcart__qty {
    position: relative;
    margin-bottom: 1em;
    max-width: 100px;
    min-width: 75px;
    overflow: visible;
}
.js-qty-item {
    left: 0;
    border-right: 1px;
 solid #e6e6e6;
}
.js-qty-item{
    cursor: pointer;
    position: absolute;
    display: block;
    top: 0;
    bottom: 0;
    border: 0 none;
    padding: 0 8px;
    background: none;
    text-align: center;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
/*button số lượng*/
<b:tag name='style'>/* <![CDATA[ */
.buttons_added {
    opacity:1;
    display:inline-block;
    display:-ms-inline-flexbox;
    display:inline-flex;
    white-space:nowrap;
    vertical-align:top;
}
.is-form {
    overflow:hidden;
    position:relative;
    background-color:#f9f9f9;
    height:2.2rem;
    width:1rem;
    padding:0;
    text-shadow:1px 1px 1px #fff;
    border:1px solid #ddd;
}
.is-form:focus,.input-text:focus {
    outline:none;
}
.is-form.minus {
    border-radius:4px 0 0 4px;
}
.is-form.plus {
    border-radius:0 4px 4px 0;
}
.input-qty {
    background-color:#fff;
    height:2.2rem;
    text-align:center;
    font-size:1rem;
    display:inline-block;
    vertical-align:top;
    margin:0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    border-left:0;
    border-right:0;
    padding:0;
}
.input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
    -webkit-appearance:none;
    margin:0;
}
/* ]]> */</b:tag>

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
</style>
</head>
<body>
	<?php include('header.php') ?>
  <div class="container" style="margin-top: 90px;">
    <div class="col-lg-12">
      <div class="row">
	<?php
    //echo $username;
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    $sql = "SELECT * FROM hanghoa WHERE id=$id";
    $ketqua = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($ketqua);
        $dongia = $row['dongia'];
        echo '<div class="col-sm-4" align="center"><div class="item"><img src="'.$row['hinhanh'].'" style="width: 200px; height: 200px;"></div></div>';
        echo '<div class="col-sm-8"><div class="item"><h3>Tên sản phẩm: '.$row["tenhang"].'</h3>';
        include("ratings.php");
        echo '<br><h2 style="color: red;">Giá: '.number_format($dongia,3). ' VND'.'</h2>';
        echo'<div class="buttons_added" style="margin-bottom: 20px;">';
        echo 'Số lượng: ';
          echo'<input class="minus is-form" type="button" value="-">';
          echo'<input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">';
          echo'<input class="plus is-form" type="button" value="+">';
        echo'</div>';
        echo '<a href="themvaogio.php?idhang=' . $row['id'] . '" class="btn btn-primary">Thêm vào giỏ hàng</a> <a href="thanhtoan.php" class="btn btn-success">Mua ngay</a></div></div>'; 
        $_SESSION['iddanhmuc']=$row['iddanhmuc'];
        //$_SESSION['id']=$id;
    //echo $_SESSION['iddanhmuc'];
	?>
      </div> 
    </div> 
    <script>//<![CDATA[
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
//]]></script>
  <div class="col-lg-12" style="margin-top: 50px;">
    <div class="col-sm-2"><h4>Bình luận</h4></div>
  <div class="row">
  <div class="col-sm-12">
  <center>
    <div id="binhluan">
    <p><input type="hidden" id="idhanghoa" value="<?php echo $row['id']; ?>">
    <input type="hidden" id="username" value="<?php echo $_SESSION['username']; ?>"></p>
  
  <p> 
  <input type="text" style="width: 50%; " id="noidung" placeholder="Nội dung bình luận" class="form-control"></p>
  <p><input type="hidden" id="thoigian" value="<?php echo date("d.m.Y h:i:sa"); ?>"></p>
  <input type="submit" value="Gửi bình luận" id="btnGui" class="btn btn-primary">
  </div></center>
  </div>
  </div>
  </div>
  <div class="col-lg-12">
  <div class="row">
  <div class="col-sm-12">
    <div id="danhsachbinhluan">
        <?php
        $conn1 = mysqli_connect("localhost", "root", "", "doan_cuoiky");
        $sql1 = "SELECT * FROM binhluan WHERE idhanghoa=".$_GET['id'];
        // echo $sql1;
        $ketqua1 = mysqli_query($conn1, $sql1);
        echo '<h3 style="font-family: Courier new; margin: 0px 0 30px 0; color: green; text-align: center;">Lời bình</h3>';
          echo '<div class="col-sm-12">';
          echo          '<table class="table table-hover">';
                            echo'<thead>';
                                echo'<tr>';
                                  echo'<th></th>';
                                  echo'<th>Tên</th>';
                                  echo'<th>Bình luận</th>';
                                  echo'<th>Ngày bình luận</th>';
                                echo'</tr>';
                            echo'</thead>';
                            echo'<tbody>';
                            while ($row1 = mysqli_fetch_array($ketqua1)) {
                              echo'<tr>';
                                echo'<td><img src="img\avartar.jpg" alt="Avartar" class="image" style="width:40px; height: 40px; margin-right: 5px; border-radius: 100px; ">';
                                echo'</td>';
                                echo'<td>'. $row1["username"].'</td>';
                                echo'<td>'.$row1['noidung'].'</td>';
                                echo'<td>'.date("d.m.Y").'</td>';
                              echo'</tr>';
                            }
                            echo'</tbody>';
                        echo'</table>';
                        
                    echo'</div>';
          
          echo '</div>';
          ?>
    </div>
  </div>
  </div>
  </div>
  <div class="col-sm-12">
      <h3 style="font-family: Courier new; margin: 0px 0 30px 0; color: green; text-align: center;">Sản phẩm liên quan</h3>
      <div class="row">
        <?php 
        $iddanhmuc = $_SESSION['iddanhmuc'];
        //if (isset($id)) {
          $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
          $sql = "SELECT * FROM hanghoa WHERE iddanhmuc=$iddanhmuc";
          $ketqua2 = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($ketqua2);
            while ($row = mysqli_fetch_assoc($ketqua2)){
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
        //}
            ?>
      </div>
    </div>
  </div>
  <?php  
include("footer.php");
  ?>
</body>
</html>



