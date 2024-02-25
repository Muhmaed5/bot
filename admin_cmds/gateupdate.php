<?php
if(strpos($text,'$disable')===0){
    // Function for Admin or not == true
if($user_id == "1346261438" or $user_id == "5147213203" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "5520425224"){}
else{
    exit();
}

    //  Start of Scrit
    $listak = substr($text, 9);
    $i     = explode("|", $listak);
    $gatecmd = $i[0];
    $comment = $i[1];
    if(empty($comment)){
$comment = "not";
}

// Format invalid
if(empty ($gatecmd)){
    $content = ['chat_id' => $chat_id, 'text' => "<b>Format:</b> <code>/disable xx|reason</code> ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    SendMessage($content);
    exit();
    }


/**
 * SQL PART
 */
$SQL = "UPDATE `gateway` SET `status`='OFF',`comment`='$comment' WHERE `gatecmd` = '$gatecmd'";
$result = mysqli_query(mysqlcon(), $SQL);

$content = ['chat_id' => $chat_id, 'text' => "<b>$gatecmd Turned off\nReason:</b> $comment", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();

}



///// Start 


if(strpos($text,'$enable')===0){
    // Function for Admin or not == true
if($user_id == "1346261438" or $user_id == "1097564715" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "5520425224"){}
else{
    exit();
}

    //  Start of Scrit
    $listak = substr($text, 8);
    $i     = explode(" ", $listak);
    $gatecmd = $i[0];

    

// Format invalid
if(empty ($gatecmd)){
    $content = ['chat_id' => $chat_id, 'text' => "<b>Format:</b> <code>/enable cmd</code> ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    SendMessage($content);
    exit();
    }


/**
 * SQL PART
 */
$SQL = "UPDATE `gateway` SET `status`='ON',`comment`='not' WHERE `gatecmd` = '$gatecmd'";
$result = mysqli_query(mysqlcon(), $SQL);

$content = ['chat_id' => $chat_id, 'text' => "<b>$gatecmd Turned ON</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();

}

// END OF SCRIPT