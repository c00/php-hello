<?php
$message = getenv('PHP_MESSAGE') ? getenv('PHP_MESSAGE') : 'Hello world!';
$infoPass = getenv('PHP_INFO_PASS') ? getenv('PHP_INFO_PASS') : null;
$requestPass = $_GET['pass'] ?? null;

if ($infoPass !== null && $requestPass !== null && $infoPass === $requestPass) {
  phpinfo();
} else {
  echo $message;
}
