<?php
        $id = $_GET['id'];
    	$conn = mysqli_connect("localhost", "root", "", "doan_cuoiky");
    	$sql = "DELETE FROM danhmuc WHERE id = $id";
    	$ketqua = mysqli_query($conn, $sql);
    	header("Location: qly_danhmuc.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xoa danh muc</title>
</head>
<body>
	
</body>
</html>

