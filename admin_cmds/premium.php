<?php


///// Start 


if(strpos($text,'$pmn')===0){
    // Function for Admin or not == true
if($user_id == "1346261438" or $user_id == "5147213203" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "5470919796" or $user_id == "1147877199" or $user_id == "1147877199"){}
else{
    exit();
}

    //  Start of Scrit
    $listak = substr($text, 5);
    $i     = explode("|", $listak);
    $id = $i[0];
    $day = $i[1];
    $expiry = $day * 86400;
    $now = time();
    $expiry = $now + $expiry;
    $pi = date('l jS \of F Y',$expiry);

// Format invalid
if(empty ($id)){
    $content = ['chat_id' => $chat_id, 'text' => "<b>Format:</b> <code>.pmn id del usuario|30 y los dias</code> ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    SendMessage($content);
    exit();
    }
if(empty ($day)){
    $content = ['chat_id' => $chat_id, 'text' => "<b>Format:</b> <code>.pmn id del usuario|30 y los dias</code> ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    SendMessage($content);
    exit();
    }


/**
 * SQL PART
 */
 
enviarPM($id);
 $m = "
> 𝘜𝘴𝘦𝘳 𝘈𝘶𝘵𝘩𝘰𝘳𝘪𝘻𝘦𝘥 𝘚𝘶𝘤𝘤𝘦𝘴𝘴𝘧𝘶𝘭𝘭𝘺 🕊
> 𝘎𝘢𝘵𝘦𝘴: Premium 
> 𝘌𝘹𝘱𝘪𝘳𝘦𝘴 𝘪𝘯: $pi";
 $content = ['chat_id' => $id, 'text' => "$m", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
      
$SQL = "UPDATE `administrar` SET `plan`='Premium User',`planexpiry`='$expiry',`antispam2`='35s' WHERE `id` = '$id'";
$result = mysqli_query(mysqlcon(), $SQL);

$content = ['chat_id' => $chat_id, 'text' => "<b>> 𝘜𝘴𝘦𝘳 𝘈𝘶𝘵𝘩𝘰𝘳𝘪𝘻𝘦𝘥 𝘚𝘶𝘤𝘤𝘦𝘴𝘴𝘧𝘶𝘭𝘭𝘺 🕊</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        
    
        
        exit();

}

// END OF SCRIPT