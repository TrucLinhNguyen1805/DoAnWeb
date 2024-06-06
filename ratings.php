<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh gia sao</title>
    <style>
        /**
 * Để cho đơn giản nhất mình dùng icon star của font awesome.
 * À mà khoan, ở đây chúng ta chỉ làm tut nhỏ nên thấy import cả 1 library font-awesome có vẻ hơi quá đáng đã vậy còn ngược lại tiêu chí 
 * "HẠN CHẾ TỐI DÙNG THƯ VIỆN NGOÀI" :D chắc các bạn nghĩ thế nhỉ? Hiện tại chúng ta chỉ implement 1 tut nhỏ thì có vẻ thừa, 
 * nhưng trong project mình đang code có sẵn font-awesome nên trên thực tế mình đâu có * thêm gì đâu :D
 */
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
/*reset css*/
div,label{margin:0;padding:0;}
body{margin:0px;}
h1{font-size:1.5em;margin:10px;}
/****** Style Star Rating Widget *****/
#rating{border:none;float:left;}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:5px;font-size:1em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
#rating>label{color:#ddd;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover, 
#rating:not(:checked)>label:hover~label{color:#FFD700;}
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:#FFED85;}
    </style>
</head>
<body>
    
<script>
    function calcRate(r) {
 const f = ~~r,//Tương tự Math.floor(r)
 id = 'star' + f + (r % f ? 'half' : '')
 id && (document.getElementById(id).checked = !0)
}
</script>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rating = $_POST['rating'];
  $idhang = $_SESSION['id'];
  echo $idhang;
        
        $conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
        $sql = "INSERT INTO rating(idhang, rating) VALUES ($idhang, $rating)";
        $ketqua = mysqli_query($conn, $sql);

}
        echo'<form action="" method="POST">';
    echo'<div id="rating">';
    echo'<input type="radio" id="star5" name="rating" value="5" />';
    echo'<label class = "full" for="star5" title="Awesome - 5 stars"></label>';
 
    echo'<input type="radio" id="star4" name="rating" value="4" />';
    echo'<label class = "full" for="star4" title="Pretty good - 4 stars"></label>';
 
    echo'<input type="radio" id="star3" name="rating" value="3" />';
    echo'<label class = "full" for="star3" title="Meh - 3 stars"></label>';
 
    echo'<input type="radio" id="star2" name="rating" value="2" />';
    echo'<label class = "full" for="star2" title="Kinda bad - 2 stars"></label>';
 
    echo'<input type="radio" id="star1" name="rating" value="1" />';
    echo'<label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
    echo'</div>';
    echo'</form>';
    
      ?>
</body>
</html>

