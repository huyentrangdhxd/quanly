<html>
<head>
	<title>vi</title>
</head>
<body>
	<form action='a.php' method='POST'>
	<input type='text' name='txtnum' size='10' />
	<input type='submit' name='ok' value='submit' />
	</form>
<?php 
	if(isset($_POST['ok'])){
		if($_POST['txtnum']){
			if(is_numeric($_POST['txtnum'])){
			echo "dung";}
			else {echo "phai nhap so";}
				}}?>
			