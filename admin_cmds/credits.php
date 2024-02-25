<?php
if(strpos($text,'$credits')===0){

$listak = substr($text, 9);
    $i     = explode("|", $listak);
    $user    = $i[0];
    $credits  = $i[1];

   $sql = "SELECT * FROM administrar WHERE id='$user_id'";
    $cs = mysqli_query(mysqlcon(),$SQL);
    $raw = mysqli_fetch_assoc($cs);
    $creditss = $raw['creditos'];
    
    $credits = $creditss + $credits;
if(!empty($user)){
$SQL = "UPDATE `administrar` SET `creditos`='$credits' WHERE `id` = '$user'";

mysqli_query(mysqlcon(), $SQL);
$content = ['chat_id' => $chat_id, 'text' => "credits updated to $user whare credits = $credits ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
SendMessage($content);
exit();
}}