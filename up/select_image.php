<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$result=$pdo->query("select image from img_upload;");

foreach($result as $row){
	$uploaded_img=$row['image'];
}
$image_path="./image/".$uploaded_img;
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
</head>

<body>
	<img src="<?php echo $image_path;?>">
</body>
</html>