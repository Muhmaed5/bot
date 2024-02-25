<?php

if (strpos($text, '/bin') === 0 || strpos($text, '/bin') === 0 || strpos($text, ".bin") === 0 || strpos($text, "?bin") === 0 || strpos($text, "#bin") === 0) {
    //$bin = explode(" ", $text)[1];
$bin = preg_replace('/[^0-9]+/', '', $text);
$bin = substr($bin, 0, 6);

$binr = preg_replace('/[^0-9]+/', '', $quetzal);
$bin = substr($bin, 0, 6);

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

        $content = ['chat_id' => $chat_id, 'text' => "𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        
        sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);
        $m = "<b>Bin Lookup! ♻️
- - - - - - - - - - - - - - - - - - - - - - - - - - - </b>
<b>Bin - ↯ </b><code>$bin</code>
<b>Info - ↯ </b>$brand ➳ $type ➳ $level
<b>Bank - ↯ </b>$bank
<b>Country - ↯ </b>$country $emoji
- - - - - - - - - - - - - - - - - - - - - - - - - - - 
<b>Checked by ➳</b> @$username\n\nOwners ➳ @Ceshack7 - @Gabrielgodzzz";
            $content = ['chat_id' => $chat_id, 'text' => "$m", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
            $m2  = EditMessageText($content);
}else{
$content = ['chat_id' => $chat_id, 'text' => "<b>Please enter a valid bin ex: <code>/bin 401658</code></b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
}
}