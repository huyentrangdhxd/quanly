<html>
<head>
	<title> lam viec voi file</title>
</head>
<body>
	<form action=bt2.php method='post'>
		Your Name:<input type='text' name='txtname' size='25' />
		<input type='submit' name='ok' value='register' />
	</form>
<?php
	if(isset($_POST['ok'])){
	$p=fopen('danhsach.txt', 'a');
	$a=$_POST['txtname']."\r\n";
	fwrite($p,$a);
	echo "<script>alert ('them vào file danh sach thanh cong')</script>";
	fclose($p);
	$p=fopen('danhsach.txt', 'r');
	while(!feof($p)){
		echo fgets($p)."<br />";
	}
	fclose($p);
}
?>
</body>
</html>