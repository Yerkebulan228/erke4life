<?php
if(isset($_FILES['image'])){
 $errors = array();
 $file_name = $_FILES ['image']['name'];
 $file_size = $_FILES['image']['size'];
 $file_tmp = $_FILES['image']['tmp_name'];
 $file_type = $_FILES['image']['type'];
 $file_ext = strtolower(end(explode('.',  $_FILES ['image']['name'] )));
 $expensions = array("jpeg", "jpg", "png");
 if($file_size> 2097152) {
 	$errors[] = 'Файл должен быть более 2х мб';
 }
  if(empty($errors) == true) {
  	move_uploaded_file($file_tmp, "images/".$file_name);
  	echo "Success";
  } else {
     print $errors;
  
  }
}
?>
<!Doctype html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit">
</form>
</body>
</html>