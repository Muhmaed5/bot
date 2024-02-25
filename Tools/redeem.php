<?php
require_once '/home/alvcarr230/www/project/data/data.php';
if(strpos($text,'/redeem') === 0){
	$SQL = "SELECT * FROM `administrar` WHERE id=".$user_id;
    $CONSULTA = mysqli_query(mysqlcon(),$SQL);
    $f = mysqli_num_rows($CONSULTA);

    if($f > 0)
    {} else{
        $content = ['chat_id' => $chat_id, 'text' => "$not_registered", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
        $m1  = SendMessage($content);
        exit;
    }
	$find = substr($text, 8);
	$SQL = "SELECT status FROM nick WHERE nick='$find'";
	$result = mysqli_query(mysqlcon(), $SQL);
	$json_array = [];
	while ($row = mysqli_fetch_assoc($result)) {
	$json_array[] = $row;
	}
	$final2 = json_encode($json_array);
	$planstatus = anicap($final2, '"status":"','"');
	mysqli_close(mysqlcon());
	$SQL = "SELECT plan FROM nick WHERE nick='$find'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$plan =anicap($final2, '"plan":"','"');
mysqli_close(mysqlcon());


$SQL = "SELECT planexpiry FROM nick WHERE nick='$find'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$planexpiry = anicap($final2, '"planexpiry":"','"');
mysqli_close(mysqlcon());



// Check connection
// Attempt create database query execution
$SQL = "UPDATE `nick` SET `status` = 'USED' WHERE `nick`.`nick` = '$find';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());
# 𝑼𝒔𝒆𝒅 �𝒆𝒚 𝑫�𝒕𝒆𝒄𝒕𝒆𝒅

if ($planstatus == "USED") {

	$content = ['chat_id' => $chat_id, 'text' => "$used_key", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
	SendMessage($content);

$SQL = "SELECT warns FROM administrar WHERE $user_id='$user_id'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$warns = anicap($final2, '"warns":"','"');
$warns = $warns + 1;
mysqli_close(mysqlcon());

// Check connection
// Attempt create database query execution
$SQL = "UPDATE `administrar` SET `warns` = '$warns' WHERE `administrar`.`id` = '$user_id';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());

}

elseif (empty($planexpiry)) {

$SQL = "SELECT warns FROM administrar WHERE id='$user_id'";
$result = mysqli_query(mysqlcon(), $SQL);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$warns = anicap($final2, '"warns":"','"');
$warns = $warns + 1;
mysqli_close(mysqlcon());
// Check connection
// Attempt create database query execution
$SQL = "UPDATE `administrar` SET `warns` = '$warns' WHERE `administrar`.`id` = '$user_id';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());

	$content = ['chat_id' => $chat_id, 'text' => "$invalid_key", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
	SendMessage($content);}

else{


// Check connection
// Attempt create database query execution
$SQL = "UPDATE `administrar` SET `plan` = '$plan' WHERE `administrar`.`id` = '$user_id'";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());

 
// Check connection
// Attempt create database query execution
$SQL = "UPDATE `administrar` SET `planexpiry` = '$planexpiry' WHERE `administrar`.`id` = '$user_id';";
$result = mysqli_query(mysqlcon(), $SQL);
// Close connection
mysqli_close(mysqlcon());


			$now = time();
			$planexpiry = date('Y-m-d', $planexpiry);
			
$fechaActual = date('Y-m-d'); 
$date1 = new DateTime($fechaActual);
$date2 = new DateTime($planexpiry);
$diff = $date1->diff($date2);
$dias = $diff->days;
	$content = ['chat_id' => $chat_id, 'text' => "<b>Key Redeemed Successfully!!\n-------------------------------------------------\nPlan: [<code>$plan</code>]\nExpire in: <code>$dias Dias</code>\nRedeem by: @$username\n-------------------------------------------------</b>", 'reply_to_message_id' => $msg_id, 'parse_mode' => 'html'];
	$m1  = SendMessage($content);
}





}
?>