<?php
if((strpos($text, '/id') === 0)){
$starttime = microtime(true);
$mytime = 'time1';
$msg = "<b>User ID:<code> $user_id </code> | Took:<code> {$mytime($starttime)}s</code>
Chat ID: <code>$chat_id</code></b>";
$content = ['chat_id' => $chat_id, 'text' => $msg, 'reply_to_message_id' => $msg_id, 'parse_mode' => "HTML"];
SendMessage($content);

}
?>