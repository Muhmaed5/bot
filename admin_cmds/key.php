<?php

if (strpos($text, '$key') === 0){
if($user_id == "1346261438" or $user_id == "1097564715" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "5470919796" or $user_id == "5147213203" or $user_id == "5520425224" or $user_id == "5578230138" or $user_id == "1147877199"){}
else{
    exit();
}



    $listak = substr($text, 5);
    $i     = explode("|", $listak);
    $plantype    = $i[0];
    $expiry  = $i[1];
    $expiry = $expiry * 86400;
    $now = time();
    $expiry = $now + $expiry;
    ///////////////////////[2nd Req is for VALIDATE]
    
    if(empty($plantype)){
$plantype = "P";
}
    
    function RandomString($length = 4)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    
    if ($plantype == "P") {
        $plantype = "Premium User";
    }
    
    if ($plantype == "V") {
        $plantype = "Vip User";
    }
    $two = RandomString();
    $three = RandomString();
    $four = RandomString();
    $key = 'MikazaChkBot-'.$two.''.$three.''.$four.'';
    // Check connection
    // Attempt create database query execution
    $SQL = "INSERT INTO nick (nick, status, plan, planexpiry) VALUES ('$key', 'ACTIVE','$plantype','$expiry')";
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    if(mysqli_query(mysqlcon(), $SQL)){
        $result = "> 𝘜𝘴𝘦𝘳 𝘈𝘶𝘵𝘩𝘰𝘳𝘪𝘻𝘦𝘥 𝘚𝘶𝘤𝘤𝘦𝘴𝘴𝘧𝘶𝘭𝘭𝘺 🕊";
    } else{
        $result = mysqli_error(mysqlcon());
    }
    
$expiry = date('Y-m-d',$expiry);
$fechaActual = date('Y-m-d'); 
$date1 = new DateTime($fechaActual);
$date2 = new DateTime($expiry);
$diff = $date1->diff($date2);
$dias = $diff->days;
    //=========================================================[Responses]
    $file = fopen("test.txt","w");
    echo fwrite($file,$result);
    fclose($file);
    
    
    //////////Bot Respo
    

        $content = ['chat_id' => $chat_id, 'text' => "<b><code>[$]-Key Mikaza-</code>
⎆Key: <code>$key</code>
-------------------------------------------------
⎆Plan: <code>[$dias Dias]</code>
Rango: <code>[$plantype]</code>
-------------------------------------------------
<code>use</code> <i>/redeem</i>
<code>[🍁]Have a good day...</code></b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    
    }