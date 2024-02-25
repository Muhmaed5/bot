<?php
if(strpos($text,'.antispam') ===0 || strpos($text, '/antispam') === 0){
    if($user_id == "1346261438" or $user_id == "1097564715" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "1147877199"){}
else{
    exit();
}

$mensaje = substr($text, 10);
$i = explode(' ', $mensaje);
$antispam = $i[0];
$userId = $i[1];


if(empty($mensaje)){
         $m = "
Mensaje invalido!

Ex: /antispam 1s UserID

Consejo: define los segudnos con - s - por ejemplo 30s = 30 Segundos
       ";
        $content = ['chat_id' => $chat_id, 'text' => "$m", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
         SendMessage($content);
         exit;
}


$sqli = "SELECT * FROM `administrar` WHERE id = '$userId'";
$con = mysqli_query(mysqlcon(), $sqli);
$filas = mysqli_num_rows($con);
if($filas > 0){
       
}else{
       $m = "
No logre encontrar el ID del usuario en mi lista de registros!
       ";
        $content = ['chat_id' => $chat_id, 'text' => "$m", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
         SendMessage($content);
         exit;
}

    if(stripos($antispam,'s')){
            $segundos = segundosAntispam(time(),$antispam);
          }

$sql = "UPDATE `administrar` SET `antispam2`='$antispam' WHERE id='$userId'";
$consultar = mysqli_query(mysqlcon(), $sql);

       $m = "
Ok el usuario con ID: $userId, tiene de AntiSpam: $antispam
       ";
        $content = ['chat_id' => $chat_id, 'text' => "$m", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
         SendMessage($content);
    }
    
    
