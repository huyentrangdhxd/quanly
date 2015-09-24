<html>
<head>
	<title>tinh don gia</title>
</head>
<body>
	<table>
	<form action='bt4.php' method='POST'>
		<tr>
			<td>Nhap don gia: <input type='text' name='txtdongia' size='25'></td>
		</tr>
		<tr>
			<td>Nhap so luong:<input type='text' name='txtsoluong' size='25'></td>
		</tr>
		<tr>
			<td><input type ='submit' name='ok' value='tinh tien'></td>
		</tr>
	</form>
	</table>
	<?php
	if(isset($_POST['ok'])){
		if (($_POST['txtdongia']) && ($_POST['txtsoluong'])){
			$a=$_POST['txtdongia'] * $_POST['txtsoluong']*110/100;
			echo "Tong tien phai tra la: $a VND<br/>";
							}
			}
	?>
</body>
</html>