<?php
if(strpos($text,'$add')===0){
    if($user_id == "1346261438" or $user_id == "1097564715" or $user_id == "1436293638" or $user_id == "5173634228" or $user_id == "5520425224"){
    }
    else{
      exit();
    }
   $listak = substr($text, 5);
    $i     = explode("|", $listak);
    $gatename = $i[0];
    $gatecmd = $i[1];
    $gatestatus = $i[2];
    if(empty ($gatename)){
        $content = ['chat_id' => $chat_id, 'text' => "format is name|cmd|off/on", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
    }
    $sql = "SELECT gatecmd FROM gateway WHERE gatecmd='$gatecmd'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    

    $gatec = anicap($final2, '"gatecmd":"','"');
    mysqli_close(mysqlcon());
if($gatec == $gatecmd){
    $content = ['chat_id' => $chat_id, 'text' => "gate already added", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
}else{
$SQL = "INSERT INTO `gateway`(`name`, `gatecmd`, `status`, `comment`) VALUES ('$gatename','$gatecmd','$gatestatus', 'not')";
$result = mysqli_query(mysqlcon(), $SQL);
$content = ['chat_id' => $chat_id, 'text' => "Gateway added successfully on my database", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        SendMessage($content);
        exit();
}}