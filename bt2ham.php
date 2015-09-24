<html>
<head>
	<title>bt ham </title>
</head>
<body>
	<form action='bt2ham.php' method='post' >
		Don gia:<input type='text' name='txtprice' value='<?php if(isset( $_POST['txtprice']))echo $_POST['txtprice'];  ?>'/><br />
		So luong:<select name='txtnum'>
			<?php 
			for ($i=1;$i<=100;$i++){
				if($_POST['txtnum']==$i){
					
					echo "<option value='$i' selected> $i </option>";}
					else echo "<option value='$i'> $i </option>";
			}
			?>
			</select>
		<input type='submit' name='ok' value='submit'>
	</form>
	<?php
		If (isset($_POST['ok'])){
			If (is_numeric($_POST['txtprice'])){
				$a=$_POST['txtprice'];
				$b=$_POST['txtnum'];
			function tinhtien($a,$b,$c,$d){
				$e=$a*$b*$c*$d;
				return $e;
			}
			if($b<30) echo "Tong tien phai tra la:".tinhtien($a,$b,1,1.1);
			else  echo "Tong tien phai tra la:".tinhtien($a,$b,0.92,1.1);
		}
	}
	?>
</body>
</html>