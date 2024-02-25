<?php
/**
 * register
 * Connect
 */
if(in_array($text, ['/register', '!register', '.register', '#register', '?register','/registrar', '!registrar', '.registrar', '#registrar', '?registrar'])){
    $content = ['chat_id' => $chat_id, 'text' => "Proccessing.........", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1  = SendMessage($content);
    $m1i = $m1['result']['message_id'];
   // sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);
    $sql = "SELECT * FROM `administrar` WHERE `id`='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $content = ['chat_id' => $chat_id, 'text' => "<b>═════════════\n[★] Already Registered\n═════════════\n[★] First Name : $ufname\n[★] User ID : <code>$user_id</code></b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        EditMessageText($content);
    }else{
        $SQL = "INSERT INTO `administrar`(`id`, `rango`, `creditos`, `antispam`,`status`, `warns`, `plan`, `planexpiry` , `username`) VALUES ('$user_id','Free User',10,0,'ACTIVE', 0, 'Free User','0','$username')";
        $cs = mysqli_query(mysqlcon(),$SQL);
        $content = ['chat_id' => $chat_id, 'text' => "<b>---------------★---------------------\n[ϟ]  Registration Successfull \n-----------------★---------------------\n[ϟ] Name : $ufname\n[ϟ] User ID : <code>$user_id</code>\n [ϟ] Status : <code>$user_id</code></b>", 'message_id' => $m1i, 'parse_mode' => 'html'];
        EditMessageText($content);
       
    }

    //$m2  = EditMessageText($content);
}



