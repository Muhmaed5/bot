<?php
if(strpos($text, '$banbin')===0 or strpos($text, "!banbin")===0 or strpos($text, ".addbin")===0){
    if($user_id == "1346261438" or $user_id == "1097564715" or $user_id == "1436293638" or $user_id == "5173634228"){
          }
          else{
            exit();
          }
//   sendaction($chatId, typing);
   $lista = substr($text, 8);
//   sendMessage1 ($lista);
  $bugbin = file_get_contents('banned.txt');
  $exploded = explode("\n", $bugbin);
  if (!in_array($lista, $exploded)) {
  $add_user = file_get_contents('banned.txt');
  $add_user .= $lista . "\n";
  $test =  file_put_contents('banned.txt', $add_user);
  }
  if($test == true){
    $content = ['chat_id' => $chat_id, 'text' => "<b>$lista Banned Successfully</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $start_message=  SendMessage($content);
  }else{
    $content = ['chat_id' => $chat_id, 'text' => "<b>This Bin is already banned </b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $start_message=  SendMessage($content);
  }
  }
  