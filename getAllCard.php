<?php
include_once 'cardModel.php';

$card = new Data($db);
$cards = $card->getAllData();
// echo $cards;
header('Content-Type: application/json');
echo json_encode($cards);
?>
