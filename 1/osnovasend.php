<?php
include('../config.php');
$userstable2="osnova";
session_start();//инициируем сессию

$text=$_POST['text'];
$nomer=$_POST['nomer'];



$sql ="UPDATE $userstable2 SET text=? WHERE id=?";

$query=$pdo->prepare($sql);
//$query=$pdo->prepare("UPDATE $userstable2 SET text=?  WHERE id=?");
$q=$query->execute(array($text,$nomer));

?>
