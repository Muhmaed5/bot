<?php

if (strpos($text, '$broadcast')===0){

    $text_to_send = substr($text, 11);
    $SQL = "SELECT STATUS FROM `MES`";
    /*$query = mysqli_query(mysqlcon(), $SQL);
    $stat = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $status = $stat['STATUS']*/

    /*if ($status == "ON"){
        $content = ['chat_id' => $chat_id, 'text' => "Blocked Already started", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $start_message=  SendMessage($content);
        exit();
    }*/
    
    $result = mysqli_query(mysqlcon(), $SQL);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    $final2 = json_encode($json_array);
    $status = anicap($final2, '"STATUS":"','"');
    mysqli_close(mysqlcon());
    if ($status == "ON"){
        $content = ['chat_id' => $chat_id, 'text' => "Blocked Already started", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $start_message=  SendMessage($content);
        exit();
    }
    $content = ['chat_id' => $chat_id, 'text' => "broadcast started", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $start_message=  SendMessage($content);
    $start_message_id = $start_message['result']['message_id'];
    $SQL = "SELECT * FROM `administrar` WHERE id";
    $query = mysqli_query(mysqlcon(), $SQL);
    $all_users = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $sent = 0;
    $SQL = "UPDATE `MES` SET `STATUS` = 'ON'";
    $query = mysqli_query(mysqlcon(),$SQL);
        foreach($all_users as $user){
            $user_idd = $user['id'];
            $sent += 1;
        //    sleep(1);
            $url = "https://api.telegram.org/bot5142948808:AAHSsRBTxg4XmSuNhTDWI9pqMd52G09Eb5g/sendMessage?chat_id=".$user_idd."&text=".$text_to_send."&parse_mode=HTML";
          // $content = ['chat_id' => $user_idd, 'text' => "$text_to_send",'parse_mode' => 'html'];
         //  $start_message=  SendMessage($content);
         
       //    file_get_contents($url);
$content = ['chat_id' => $user_idd, 'text' => "$text_to_send",  'parse_mode' => 'html'];
        $start_message=  SendMessage($content);
            $content = ['chat_id' => $chat_id, 'text' => "<b>Messages Sent : $sent\nSending to: $user_idd</b>", 'message_id' => $start_message_id, 'parse_mode' => 'html'];
        $m3  = EditMessageText($content);
        $m3i = $m3['result']['message_id'];
        }
        $SQL = "UPDATE `MES` SET `STATUS` = 'OFF'";
        $query = mysqli_query(mysqlcon(), $SQL);
        $content = ['chat_id' => $chat_id, 'text' => "finished messages sent to all", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $start_message=  SendMessage($content);
        exit();

    }


?>