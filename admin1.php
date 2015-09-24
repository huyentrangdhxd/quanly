<?php
	session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	if(($_COOKIE["admin"]) && ($_COOKIE["pass"]) || ($_SESSION["admin"]) && ($_SESSION["pass"])){
	if(isset($_COOKIE['admin'])){
	echo"Xin Chao, ". $_COOKIE['admin'];
	echo"<a href='dangxuat1.php'>Dang xuat</a>";}

	if(isset($_SESSION['admin'])){
	echo"Xin Chao, ". $_SESSION['admin'];
	echo"<a href='dangxuat1.php'>Dang xuat</a>";}}
	else echo 'Can dang nhap ';
?>