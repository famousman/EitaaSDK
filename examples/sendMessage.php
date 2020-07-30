<?php 
include('src/EitaaAPI.php');
$eitaaToken={your token in eitaayar.ir}
$eitaaBot = new Eitaa($eitaaToken);
$chat_id={target Chat_id};
$text='this is an example';
$content=array('chat_id'=>$chat_id, 'text'=>$text);
$statusE=$eitaaBot->sendMessage($content);
var_dump($statusE);
?>
