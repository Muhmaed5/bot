<?php
if(strpos($text,'+auth') ===0){
    if($user_id == "1346261438" or $user_id == "1097564715" or $user_id == "1436293638" or $user_id == "5173634228"){}
else{
    exit();
}
    $listak = substr($text, 6);
    $i     = explode("|", $listak);
    $auth = $i[0];
    $day = $i[1];
    $expiry = $day * 86400;
    $now = time();
    $expiry = $now + $expiry;
    $pi = date('l jS \of F Y',$expiry);
    
    if(empty($auth) or empty($day)){
        $content = ['chat_id' => $chat_id, 'text' => "<b>Format:</b> <code> id del grupo y los dias. Ej: +auth -110082673353|30</code> ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }
    
    $SQL = "SELECT * FROM `authorize` WHERE chats=".$auth;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
    if($f > 0){
        $content = ['chat_id' => $chat_id, 'text' => "Group already Authorize ", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    }else{
        $SQL = "INSERT INTO `authorize`(`chats`, `planexpiry`) VALUES ('$auth', '$expiry')";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $m = "> 𝘊𝘩𝘢𝘵 𝘈𝘶𝘵𝘩𝘰𝘳𝘪𝘻𝘦𝘥 𝘚𝘶𝘤𝘤𝘦𝘴𝘴𝘧𝘶𝘭𝘭𝘺 🕊
> 𝘎𝘢𝘵𝘦𝘴: Premium 
> 𝘌𝘹𝘱𝘪𝘳𝘦𝘴 𝘪𝘯: $pi";
        $content = ['chat_id' => $chat_id, 'text' => "$m", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    }
}