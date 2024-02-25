<?php
list($cmd) = explode(" ", $text);
if($cmd == '$demote'){ 

    if($user_id == "1346261438" or $user_id == "5147213203" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "1147877199"){}
else{
    exit();
}
    $auth = explode(" ", $text)[1];
    $SQL = "SELECT * FROM `administrar` WHERE `id` = ".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
        $SQL = "UPDATE `administrar` SET `plan` = 'Free User',`planexpiry`='0'WHERE `administrar`.`id` = '$auth';";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "<b>⚠️ User Demote successfully</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
    
}