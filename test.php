<?php

$token = getenv('TOKEN');
$url = "https://api.telegram.org/bot".$token;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$arrayContent = print_r($updateArray, true);

$chat_id = $updateArray["message"]["chat"]["id"];

file_get_contents($url."/sendmessage?chat_id=".$chat_id."&text=test");

print_r($update);

?>
