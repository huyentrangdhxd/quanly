<?php
$p=fopen("truycap.txt",'r');
$online=fgets($p);
$online++;
fclose($p);
$p=fopen("truycap.txt",'w');
fwrite($p,$online);
echo "so luot truy cap:$online";

?>

