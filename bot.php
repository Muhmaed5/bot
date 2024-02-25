<?php

require_once 'requires.php';
require_once '/home/alvcarr230/www/project/data/data.php';


/* This is the code that is executed when the user sends the command `/start` or `.start` or `?start` or `#start` or `/start@` to the bot. */
if ($text == '/start' || $text == ".start" || $text == "?start" || $text == "#start" || $text == "/start@XtraChkbot") {
$keyboard = json_encode([
        "inline_keyboard" => [
            [
                ["text" => "𝗚𝗥𝗨𝗣𝗢 𝗢𝗙𝗜𝗖𝗜𝗔𝗟⚡", "url" => "https://t.me/Mikazachat"]
            ]
        ]
    ]);
    $content = ['chat_id' => $chat_id,'video'=> 'mikazausers.alwaysdata.net/project/start.mp4','caption' => "<b><code>[🌹] Welcome [🌹]

[💠]Remember that to get access to all my features and gateways, you can contact </code>@Ceshack7<code> or </code>@Gabrielgodzzz<code> to get your premium membership.

[🌐]In the same way, remember that you can consult my commands by sending</code> /cmds</b>", 'reply_to_message_id' => $msg_id,  'reply_markup' => $keyboard,'parse_mode' => 'HTML'];
    $m3 = sendvideo($content);

}


/* This is the code that is executed when the user sends the command `/cmds` or `.cmds` or `?cmds` or `#cmds` or `/cmds@` to the bot. */
if (strpos($text,'/cmds') === 0) {
$sql = "SELECT * FROM `authorize` WHERE chats=".$chat_id;
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $chats = $raw['chats'];

    if($chats != $chat_id and $ctype == "supergroup"){
        $content = ['chat_id' => $chat_id, 'text' => "$group_not_allowed", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit();
    }
    else{
        
       
    }
        
    $sql = "SELECT * FROM administrar WHERE id='$user_id'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $plan = $raw['plan'];
     mysqli_close(mysqlcon());
    
    if(empty($plan)){
        $content = ['chat_id' => $chat_id, 'text' => "$not_registered", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    if($plan == "Free User" and $ctype == "private"){
        $content = ['chat_id' => $chat_id, 'text' => "$not_allowed", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
            $m1  = SendMessage($content);
            exit();
    }else{
        
    }
    $SQL = "SELECT * FROM `administrar` WHERE `id`=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "$not_registered", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                ["text" => "𝗚𝗔𝗧𝗘𝗪𝗔𝗬𝗦", "callback_data" => "gates"],
                ["text" => " 𝗧𝗢𝗢𝗟𝗦 🔧", "callback_data" => "tools"],
                ["text" => "𝗔𝗕𝗢𝗨𝗧 𝗠𝗘", "callback_data" => "info"]
            ],
            [
                ["text" => "Close", "callback_data" => "exit"]
            ],
            [
                ["text" => "𝗦𝗨𝗣𝗣𝗢𝗥𝗧 𝗖𝗛𝗔𝗧", "url" => "https://t.me/Mikazachat"]
            ]
        ]
    ]);

    $content = ['chat_id' => $chat_id,'video'=> 'mikazausers.alwaysdata.net/project/cmdss.gif.mp4','caption' => "𝗛𝗘𝗥𝗘 𝗜𝗦 𝗠𝗬 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦💥", 'reply_markup' => $keyboard, 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
    $m1 = sendvideo($content);
}


/* This is the code that is executed when the user clicks on the "Return" button. */
if ($data == "home" || $data == "return") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
            [
                ["text" => "𝗚𝗔𝗧𝗘𝗪𝗔𝗬𝗦", "callback_data" => "gates"],
                ["text" => "𝗧𝗢𝗢𝗟𝗦 🔧", "callback_data" => "tools"],
                ["text" => "𝗔𝗕𝗢𝗨𝗧 𝗠𝗘", "callback_data" => "info"]
            ],
            [
                ["text" => "𝗖𝗹𝗼𝘀𝗲", "callback_data" => "exit"]
            ],
            [
                ["text" => "𝗦𝗨𝗣𝗣𝗢𝗥𝗧 𝗖𝗛𝗔𝗧", "url" => "https://t.me/Mikazachat"]
            ]
        ]
        ]);


$content = ['chat_id' => $callbackchatid,'video'=> 'mikazausers.alwaysdata.net/project/start.mp4','caption' => "𝗛𝗘𝗥𝗘 𝗜𝗦 𝗠𝗬 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦💥", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


/* This is the code that is executed when the user clicks on the "Gates" button. */
if ($data == "gates") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "𝗖𝗵𝗮𝗿𝗴𝗲", "callback_data" => "charge"],
                    ["text" => "𝗔𝘂𝘁𝗵", "callback_data" => "auth"],
                    ["text" => "𝗠𝗮𝘀𝘀", "callback_data" => "mass"],
                ],
                [
                    ["text" => "𝗣𝗿𝗲𝘃𝗶𝗼𝘂𝘀", "callback_data" => "home"],
                   // ["text" => "𝗖𝗹𝗼𝘀𝗲", "callback_data" => "end"]
                ]
            ]
        ]);

        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => "", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}

/* This is the code that is executed when the user clicks on the "Gates Charge" button. */
if ($data == "charge") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Previous", "callback_data" => "gates"],
                  //  ["text" => "Next", "callback_data" => "charge2"],
                ]
            ]
        ]);

        /*$content = ['chat_id' => $callbackchatid, 'text' => $charge, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditMessageText($content);*/
        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $charge, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}

/* This is the code that is executed when the user clicks on the "Gates Auth" button. */
if ($data == "auth") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Previous", "callback_data" => "gates"],
         //           ["text" => "Home", "callback_data" => "home"],
                ]
            ]
        ]);


$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $auth, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


if ($data == "mass") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Previous", "callback_data" => "gates"],
                  //  ["text" => "", "callback_data" => "auth"],
                  //  ["text" => "Home", "callback_data" => "return"],
                ]
            ]
        ]);

        
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $mass, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


/* This is the code that is executed when the user clicks on the "3D Check" button. */
if ($data == "3d") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Gates Auth", "callback_data" => "auth"],
                    ["text" => "Gates Charge", "callback_data" => "charge"],
                    ["text" => "Return", "callback_data" => "return"],
                ]
            ]
        ]);

        /*$content = [
            'chat_id' => $callbackchatid,
            'text' => $gates3d,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];*/
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $gates3d, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
        
    }
}


/* This is the code that is executed when the user clicks on the "Tools" button. */
if ($data == "tools") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Return", "callback_data" => "return"]
                ]
            ]
        ]);

        /*$content = [
            'chat_id' => $callbackchatid,
            'text' => ,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);*/
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $herramientas, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}


/* The code that is executed when the user clicks on the "Info" button. */
if ($data == "info") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
        $keyboard = json_encode([
            "inline_keyboard" => [
                [
                    ["text" => "Return", "callback_data" => "return"]
                ]
            ]
        ]);

       /* $content = [
            'chat_id' => $callbackchatid,
            'text' => $informacion,
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'parse_mode' => 'HTML'
        ];
        EditMessageText($content);*/
$content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => $informacion, 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}

/* This is the code that is executed when the user clicks on the "Finalize" button. */
if ($data == "exit") {
    if ($callbackfrom != $callbackuserid) {
        $content = ['callback_query_id' => $callbackid, 'text' => "Access denied opens another session to use it ❌", "show_alert" => true];
        answerCallbackQuery($content);
    } else {
       /* $content = [
            'chat_id' => $callbackchatid,
            'text' => "𝑮𝒐𝒐𝒅𝒃𝒚𝒆! <a href='t.me/$callbackusername'>$callbackfname</a>.",
            'message_id' => $callbackmessageid,
            'reply_markup' => $keyboard,
            'disable_web_page_preview' => true,
            'parse_mode' => 'HTML'
        ];*/
        $content = ['chat_id' => $callbackchatid,'photo'=> 'xtrachkbot.alwaysdata.net/project/th.jpeg','caption' => "Session ended! <a href='t.me/$callbackusername'>$callbackfname</a>.", 'message_id' => $callbackmessageid, 'reply_markup' => $keyboard,'disable_web_page_preview' => true, 'parse_mode' => 'HTML'];
        EditCaption($content);
    }
}