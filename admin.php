<?php
	if(isset($_COOKIE['admin'])){
	echo"Xin Chao, ". $_COOKIE['admin'];
	echo"<a href='dangxuat.php'>Dang xuat</a>";}
	else echo 'Can dang nhap ';
?>