<?php
require 'mp3Player.php';

$mp3 = new mp3Player();
$mp3 -> setId(5);
echo $mp3 -> getId().'<br>';
$players[] = new mp3Player();
$players[0]->addMusic('111');
$players[0]->addMusic('222');
$players[0]->addMusic('333');

foreach($players as $player){
    $player -> play();
    $player -> switch_up();
    $player -> play();
    $player -> switch_down();
    $player -> switch_down();
    $player -> play();
}
?>