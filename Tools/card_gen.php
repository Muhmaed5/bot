<?php
require_once './Resources/CurlX.php';
if(strpos($text,"/gen") === 0 || strpos($text,'.gen') === 0 || strpos($text,'$gen') === 0 || strpos($text,'?gen') === 0) {
$Input = substr($text, 5);

  $lista = substr($text, 5);
//$lista = explode(" ", $text)[1];

    $cc = multiexplode([":", "/", " ", "|", ""], $lista)[0];
    $mon = multiexplode([":", "/", " ", "|", ""], $lista)[1];
    $year = multiexplode([":", "/", " ", "|", ""], $lista)[2];
    $cvv = multiexplode([":", "/", " ", "|", ""], $lista)[3];
    $amou = multiexplode([":", "/", " ", "|", ""], $lista)[4];
    $bin = substr($lista, 0, 6);
if(empty($mon)){
$mon = "rnd";
}if(empty($year)){
$year = "rnd";
}if(empty($cvv)){
$cvv = "rnd";
}
if(strlen($year) == "2"){
$year = "20$year";
}
$ccl = strlen($cc);
$cco = 16;
$ttx = $cco - $ccl;

    $sql = "SELECT * FROM administrar WHERE id='$user_id'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $plan = $raw['plan'];
     mysqli_close(mysqlcon());

$Input = "$cc|$mon|$year|$cvv|$ttx";


$f = substr($Input, 0,1);
$c = array(1,2,7,8,9,0);

if(empty($Input) or !is_numeric(substr($Input, 0, 6)) ){
$content = ['chat_id' => $chat_id, 'text' => "<code>Credit Card Generator💳</code>\n<code>Format Example</code>\n<code>/gen 451014|05|23|xxx</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
die(SendMessage($content));
}

$fim = json_decode(file_get_contents('https://projectslost.xyz/bin/?bin='.$bin), true);
$status = $fim["status"];
$resultb = $fim["result"];
$level = $fim["level"];
$type = $fim["type"];
$brand = $fim["brand"];
$country = $fim["country"]["name"];
$currency = $fim["country"]["currency"];
$bank = $fim['bank']["name"];
$bankphone = $fim['bank']["phone"];
$emoji = $fim["country"]["flag"];
$pais = $fim["country"]["ISO2"];
if($status == "1"){}else{
$msg = "<code>$resultb </code>⚠️";
    $content = ['chat_id' => $chat_id, 'text' => "$msg", 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
    die(SendMessage($content));
}

    $strnew = strtolower($Input);
    $strnew = str_replace($bad,"<b>[censored]</b>",$strnew);
    if (strtolower($strnew) != strtolower($Input)) {
$msg = "Invalido";



$content = ['chat_id' => $chat_id, 'text' => $msg, 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
SendMessage($content);
      exit;
    }
    

$response = file_get_contents("https://alvcarr230.alwaysdata.net/gen.php?lista=$Input");

$msg = "------------<code>[CC Generator[🍂]</code>-----------
⎆𝐁𝐢𝐧» <code>$bin</code>
⎆𝐈𝐧𝐟𝐨» <code>$bin - $brand - $type - $bank - $pais $emoji</code>
-------------------------------------------------
$response
-------------------------------------------------
⎆𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐛𝐲» <a href='tg://user?id=$user_id'>$ufname</a> [$plan]";


$keyboard = json_encode([
        "inline_keyboard" => [
            [
                ["text" => "𝐺𝑒𝑛𝑒𝑟𝑎𝑡𝑒 𝐴𝑔𝑎𝑖𝑛 ♻️", "callback_data" => "gen"]
            ]
        ]
    ]);
$content = ['chat_id' => $chat_id, 'text' => $msg, 'reply_to_message_id' => $msg_id, 'reply_markup'=>$keyboard,'parse_mode' => "HTML"];
SendMessage($content);
}

////////////////////////////////////////////////////// CALLBACK DATAS
if($data == "gen"){
     if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
    $Input = substr($callbackbin, 5);

  $lista = substr($callbackbin, 5);
//$lista = explode(" ", $text)[1];

    $cc = multiexplode([":", "/", " ", "|", ""], $lista)[0];
    $mon = multiexplode([":", "/", " ", "|", ""], $lista)[1];
    $year = multiexplode([":", "/", " ", "|", ""], $lista)[2];
    $cvv = multiexplode([":", "/", " ", "|", ""], $lista)[3];
    $amou = multiexplode([":", "/", " ", "|", ""], $lista)[4];
    $bin = substr($lista, 0, 6);
if(empty($mon)){
$mon = "rnd";
}if(empty($year)){
$year = "rnd";
}if(empty($cvv)){
$cvv = "rnd";
}
if(strlen($year) == "2"){
$year = "20$year";
}
$ccl = strlen($cc);
$cco = 16;
$ttx = $cco - $ccl;


    $sql = "SELECT * FROM administrar WHERE id='$callbackuserid'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $plan = $raw['plan'];
     mysqli_close(mysqlcon());

$Input = "$cc|$mon|$year|$cvv|$ttx";


$f = substr($Input, 0,1);
$c = array(1,2,7,8,9,0);

if(empty($Input) or !is_numeric(substr($Input, 0, 6)) ){
$content = ['chat_id' => $chat_id, 'text' => "<code>Credit Card Generator💳</code>\n<code>Format Example</code>\n<code>/gen 451014|05|23|xxx</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
die(SendMessage($content));
}

$fim = json_decode(file_get_contents('https://projectslost.xyz/bin/?bin='.$bin), true);
$status = $fim["status"];
$resultb = $fim["result"];
$level = $fim["level"];
$type = $fim["type"];
$brand = $fim["brand"];
$country = $fim["country"]["name"];
$currency = $fim["country"]["currency"];
$bank = $fim['bank']["name"];
$bankphone = $fim['bank']["phone"];
$emoji = $fim["country"]["flag"];
$pais = $fim["country"]["ISO2"];
if($status == "1"){}else{
$msg = "<code>$resultb </code>⚠️";
    $content = ['chat_id' => $chat_id, 'text' => "$msg", 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
    die(SendMessage($content));
}


    $bad = '123456,123,88888,66666,77777,99999,111111,2222,33333,44444';
    $bad = explode(',',$bad);
    usort($bad, function($a, $b) {
        return strlen($b) - strlen($a);
    });
    $strnew = strtolower($Input);
    $strnew = str_replace($bad,"<b>[censored]</b>",$strnew);
    if (strtolower($strnew) != strtolower($Input)) {
$msg = "Invalido";



$content = ['chat_id' => $chat_id, 'text' => $msg, 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
SendMessage($content);
      exit;
    }
    

$response = file_get_contents("https://alvcarr230.alwaysdata.net/gen.php?lista=$Input");

$msg = "------------<code>[CC Generator[🍂]</code>-----------
⎆𝐁𝐢𝐧» <code>$Input</code>
⎆𝐈𝐧𝐟𝐨» <code>$bin - $brand - $type - $bank - $pais $emoji</code>
-------------------------------------------------
$response
-------------------------------------------------
⎆𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐛𝐲» <a href='tg://user?id=$callbackuserid'>".htmlspecialchars($callbackfname.$callbacklname)."</a> [<b>$plan</b>]";


$keyboard = json_encode([
        "inline_keyboard" => [
            [
                ["text" => "𝐺𝑒𝑛𝑒𝑟𝑎𝑡𝑒 𝐴𝑔𝑎𝑖𝑛 ♻️", "callback_data" => "gen"]
            ]
        ]
    ]);
$content = ['chat_id' => $callbackchatid, 'message_id'=>$callbackmessageid , 'text' => $msg, 'reply_to_message_id' => $callbackmessageid , 'reply_markup'=>$keyboard,'parse_mode' => "HTML"];
  EditMessageText($content);
    
    }
}
    