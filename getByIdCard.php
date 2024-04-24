<?php
include_once 'cardModel.php';

$card = new Data($db);
$cards = $card->getDataById($_REQUEST['id']);
// echo $cards;
header('Content-Type: application/json');
echo json_encode($cards);
?>
