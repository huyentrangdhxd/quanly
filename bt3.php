<html>
<head>
	<title>baitap3</title>
</head>
<body>
	<form action='bt3.php' method='POST'>
	<input type='text' name='txtnum' size='10' />
	<input type='submit' name='ok' value='submit' />
	</form>
<?php 
	if(isset($_POST['ok'])){
		if($_POST['txtnum']){
			if(is_numeric($_POST['txtnum'])){
			$a=$_POST['txtnum'];
		

			
				if($a % 2==0)
					echo "so $a la so chan <br/>";
	             			else echo "so $a la so le <br/>";
				$m=1;
				for ($i=2; $i<$a; $i++){
			
					if($a%$i==0){
					$m=0;}
					break;
						}

				if($m==1) echo "$a la so nguyen to <br/>";
				else echo "$a khong la so nguyen to <br/>";
				
				$gt=1;
				for ($i=$a; $i>1; $i--){
					$gt*=$i;
						}
				echo "giai thua la:$gt<br/>";
		
						} else echo "phai nhap so";
				}		
		
			}
?>
</body>
</htm>