<?php
if (strpos($text, '/git') === 0 || strpos($text, '/git') === 0 || strpos($text, ".git") === 0 || strpos($text, "?git") === 0 || strpos($text, "#git") === 0) {
    $git = explode(" ", $text)[1];




    /////
    $sql = "SELECT planexpiry FROM administrar WHERE id='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("test.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $planexpiry = anicap($final2, '"planexpiry":"','"');
    mysqli_close(mysqlcon());
    
    
    $sql = "SELECT plan FROM administrar WHERE id='$user_id'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    $plan = anicap($final2, '"plan":"','"');
    mysqli_close(mysqlcon());
    
    $now = time();
      if ($planexpiry < $now && $planexpiry == 0) {
    }
elseif ($planexpiry < $now && $plan != "Free User") {
    
    // Check connection
    // Attempt create database query execution
    $sql = "UPDATE `administrar` SET `plan` = 'Free User' WHERE `administrar`.`id` = '$user_id';";
    $result = mysqli_query(mysqlcon(), $sql);
    // Close connection
    mysqli_close(mysqlcon());
    
    
    $sql = "UPDATE `administrar` SET `planexpiry` = '0' WHERE `administrar`.`id` = '$user_id';";
    $result = mysqli_query(mysqlcon(), $sql);
    // Close connection
    mysqli_close(mysqlcon());
    $content = ['chat_id' => $chat_id, 'text' => "<b>𝒀𝒐𝒖𝒓 𝒔𝒖𝒃𝒔𝒄𝒓𝒊𝒑𝒕𝒊𝒐𝒏 𝒑𝒍𝒂𝒏 𝒊𝒔 𝒆𝒙𝒑𝒊𝒓𝒆𝒅, 𝑷𝒍𝒆𝒂𝒔𝒆 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @AniDec4ypt3d 𝒕𝒐 𝒓𝒆𝒏𝒆𝒘</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }
    $SQL = "SELECT * FROM `authorize` WHERE chats=".$chat_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);
    $json_array = [];


    while ($row = mysqli_fetch_assoc($CONSULTA)) {
    $json_array[] = $row;
    }

    $final2 = json_encode($json_array);

    $chats =anicap($final2, '"chats":"','"');
    if($chats != $chat_id and $ctype == "supergroup"){
        $content = ['chat_id' => $chat_id, 'text' => "𝑻𝒉𝒊𝒔 𝒈𝒓𝒐𝒖𝒑 𝒊𝒔𝒏'𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒕𝒐 𝒖𝒔𝒆 𝒎𝒆, 𝒄𝒐𝒏𝒕𝒂𝒄𝒕 @AniDec4ypt3d", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }
    else{
        
       
    }
    $SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $json_array = [];


    while ($row = mysqli_fetch_assoc($CONSULTA)) {
    $json_array[] = $row;
    }

    $final2 = json_encode($json_array);

    $plan =anicap($final2, '"plan":"','"');
    mysqli_close(mysqlcon());
    $SQL = "SELECT * FROM `administrar` WHERE plan=".$plan;
    if(empty($plan)){
        $content = ['chat_id' => $chat_id, 'text' => "𝑳𝒐𝒐𝒌𝒔 𝑳𝒊𝒌𝒆 𝒀𝒐𝒖 𝒉𝒂𝒗𝒆𝒏'𝒕 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒇, 𝒅𝒐 /register 𝒕𝒐 𝒄𝒐𝒏𝒕𝒊𝒏𝒖𝒆", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    if($plan == "Free User" and $ctype == "private"){
        $content = ['chat_id' => $chat_id, 'text' => "𝒀𝒐𝒖 𝒂𝒓𝒆 𝒏𝒐𝒕 𝒂𝒖𝒕𝒉𝒐𝒓𝒊𝒛𝒆𝒅 𝒕𝒐 𝒖𝒔𝒆 𝒎𝒆 𝒊𝒏 𝒑𝒓𝒊𝒗𝒂𝒕𝒆 𝒑𝒖𝒓𝒄𝒉𝒂𝒔𝒆 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒇𝒓𝒐𝒎 @AniDec4ypt3d", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    $SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "𝑳𝒐𝒐𝒌𝒔 𝑳𝒊𝒌𝒆 𝒀𝒐𝒖 𝒉𝒂𝒗𝒆𝒏'𝒕 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒇, 𝒅𝒐 /register 𝒕𝒐 𝒄𝒐𝒏𝒕𝒊𝒏𝒖𝒆", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
    

    if (empty($git)) {
        $content = ['chat_id' => $chat_id, 'text' => "𝑬𝒏𝒕𝒆𝒓 𝒂 𝒖𝒔𝒆𝒓𝒏𝒂𝒎𝒆", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    } else {
        $content = ['chat_id' => $chat_id, 'text' => "𝑷𝒍𝒆𝒂𝒔𝒆 𝒘𝒂𝒊𝒕...", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        $m1i = $m1['result']['message_id'];
        
        sendChatAction(['chat_id' => $chat_id, 'action' => "typing"]);

        $ch = curl_init("https://api.github.com/users/$git");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36'
        ));
        $curl = curl_exec($ch);
        curl_close($ch);
        $respuesta = json_decode($curl, true);
            if (!isset($respuesta['message'])) {
            $gusername   = ($respuesta['login']        == "" || null || false) ? "N/A" : $respuesta['login'];
            $glink       = ($respuesta['html_url']     == "" || null || false) ? "N/A" : $respuesta['html_url'];
            $gname       = ($respuesta['name']         == "" || null || false) ? "N/A" : $respuesta['name'];
            $gcompany    = ($respuesta['company']      == "" || null || false) ? "N/A" : $respuesta['company'];
            $blog        = ($respuesta['blog']         == "" || null || false) ? "N/A" : $respuesta['blog'];
            $gbio        = ($respuesta['bio']          == "" || null || false) ? "N/A" : $respuesta['bio'];
            $grepo       = ($respuesta['public_repos'] == "" || null || false) ? "N/A" : $respuesta['public_repos'];
            $gfollowers  = ($respuesta['followers']    == "" || null || false) ? "N/A" : $respuesta['followers'];
            $gfollowings = ($respuesta['following']    == "" || null || false) ? "N/A" : $respuesta['following'];
            $content = ['chat_id' => $chat_id, 'text' => "┏━━━━━━━━━━━━━━\n┣ 🍁 𝑼𝒔𝒆𝒓 𝑭𝒐𝒖𝒏𝒅 🍁\n┗━━━━━━━━━━━━━━\n══════════════════════\nϟ 𝑵𝒂𝒎𝒆 : <code>$gname</code>\nϟ 𝑼𝒔𝒆𝒓𝒏𝒂𝒎𝒆 : <code>$gusername</code>\nϟ 𝑩𝒊𝒐 : <code>$gbio</code>\nϟ 𝑭𝒐𝒍𝒍𝒐𝒘𝒆𝒓𝒔 : <code>$gfollowers</code>\nϟ 𝑭𝒐𝒍𝒍𝒐𝒘𝒊𝒏𝒈 : <code>$gfollowings</code>\nϟ 𝑹𝒆𝒑𝒐𝒔𝒊𝒕𝒐𝒓𝒊𝒆𝒔 : <code>$grepo</code>\nϟ 𝑾𝒆𝒃𝒔𝒊𝒕𝒆 : <code>$blog</code>\nϟ 𝑪𝒐𝒎𝒑𝒂𝒏𝒚 : <code>$gcompany</code>\nϟ 𝑮𝒊𝒕𝒉𝒖𝒃 𝒖𝒓𝒍 : $glink\n>_𝑩𝒚: @$username\n══════════════════════", 'message_id' => $m1i, 'disable_web_page_preview' => true, 'parse_mode' => 'html'];
            EditMessageText($content);
        }else{
            $content = ['chat_id' => $chat_id, 'text' => "𝑼𝒔𝒆𝒓 𝑵𝒐𝒕 𝑭𝒐𝒖𝒏𝒅 𝑬𝒓𝒓𝒐𝒓", 'message_id' => $m1i, 'parse_mode' => 'HTML'];
            $m2  = EditMessageText($content);
        }
    }
    exit();
}


