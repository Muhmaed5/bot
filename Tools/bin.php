<?php

if (strpos($text, '/bin') === 0 || strpos($text, '/bin') === 0 || strpos($text, ".bin") === 0 || strpos($text, "?bin") === 0 || strpos($text, "#bin") === 0) {
    //$bin = explode(" ", $text)[1];
$bin = preg_replace('/[^0-9]+/', '', $text);
$bin = substr($bin, 0, 6);

    $sql = "SELECT * FROM administrar WHERE id='$user_id'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $plan = $raw['plan'];
     mysqli_close(mysqlcon());

$binr = preg_replace('/[^0-9]+/', '', $quetzal);
$bin = substr($bin, 0, 6);
$bininv = substr($bin, 0, 5);
    if(empty($bin) && empty($binr)){
$content = ['chat_id' => $chat_id, 'text' => "<b>Please enter a valid bin ex: <code>/bin 401658</code></b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();

    }if(empty($bin)){
$bin = $binr;
}
if(is_numeric($bin)){
//==================[BIN LOOK-UP]======================//
$url = 'https://projectslost.xyz/bin/?bin='.$bin.'';
$fim = json_decode(file_get_contents($url), true);
$level = $fim["level"];
$type = $fim["type"];
$brand = $fim["brand"];
$country = $fim["country"]["name"];
$currency = $fim["country"]["currency"];
$bank = $fim['bank']["name"];
$bankphone = $fim['bank']["phone"];
$emoji = $fim["country"]["flag"];
$pais = $fim["country"]["ISO2"];
//==================[BIN LOOK-UP-END]======================//

if(empty($pais)) {
        $content3 = ['chat_id' => $chat_id, 'text' => "<b>Bin not found ⚠️</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
   sendMessage($content3);
        exit();
}

        $content = ['chat_id' => $chat_id, 'text' => "Condultando bin en la base de datos...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        
        sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);
        $m = "<code>Bin Information[🌐]</code>
------------------------------------------------
⎆<b>BIN</b>: <code>$bin</code>
-----------------[INFO]---------------------
[✮] <b>Type</b>: $brand - $type - $level
[✮] <b>Bank</b>: $bank
[✮] <b>Country</b>: $country [$emoji]
-----------------------------------------------
⎆𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐛𝐲» @$username [$plan]";
            $content = ['chat_id' => $chat_id, 'text' => "$m", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
            $m2  = EditMessageText($content);
}else{
$content = ['chat_id' => $chat_id, 'text' => "<b>Please enter a valid bin ex: <code>/bin 401658</code></b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
}
}