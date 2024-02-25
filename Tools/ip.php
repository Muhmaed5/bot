<?php

if (strpos($text, '/ip') === 0 || strpos($text, '/ip') === 0 || strpos($text, ".ip") === 0 || strpos($text, "?ip") === 0 || strpos($text, "#ip") === 0) {
    //$bin = explode(" ", $text)[1];
//$ipnor = preg_replace('/[^0-20]+/', '', $text);
$ipn = substr($text, 4);

//$ipr = preg_replace('/[^0-9]+/', '', $quetzal);
$ipq = substr($quetzal, 0, 6);

    if(empty($ipn) && empty($ipq)){
$content = ['chat_id' => $chat_id, 'text' => "<b>Please enter a valid ip ex: <code>/ip 1.1.1.1</code></b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }if(empty($ipn)){
$ip = $ipq;
}elseif(empty($ipq)){
$ip = $ipn;
}
//==================[IP LOOK-UP]======================//
$url = 'http://ip-api.com/json/'.$ip.'';
$fim = json_decode(file_get_contents($url), true);
$carrierb = $fim["isp"];
$orgb = $fim["org"];
$countryb = $fim["country"];
$countrycd = $fim["countryCode"];
$stateb = $fim["regionName"];
$cityb = $fim['city'];
$zipb = $fim['zip'];
$latb = $fim["lat"];
$lonb = $fim["lon"];
//$ip = $fim['ip'];
//==================[IP LOOK-UP-END]======================//

        $content = ['chat_id' => $chat_id, 'text' => "𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        
        sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);
        $m = "$ Ip Lookup
━━━━━━━━━━━━━━━
[⚙] 𝑸𝒖𝒆𝒓𝒚: $ip
[⚙] 𝑪𝒂𝒓𝒓𝒊𝒆𝒓: $carrierb
[⚙] 𝑶𝒓𝒈: $orgb
[⚙] 𝑪𝒐𝒖𝒏𝒕𝒓𝒚: $countryb ($countrycd)
[⚙] 𝑺𝒕𝒂𝒕𝒆: $stateb | City: $cityb
[⚙] 𝒁𝒊𝒑 𝒄𝒐𝒅𝒆: $zipb
[⚙] 𝑳𝒂𝒕: <code>$latb</code> | Lon: <code>$lonb</code>
[⚙] T. Taken: 0.2's
[⚙] User: @$username
━━━━━━━━━━━━━━━
[↯] By:『↯𝐌𝐊𝐙↯』☁️";
            $content = ['chat_id' => $chat_id, 'text' => "$m", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
            $m2  = EditMessageText($content);
}
