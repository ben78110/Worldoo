<?php
include("config.php");


$url=$_GET['id'];


$YYYY=date('Y');$MMx=date('m');$DD=date('d');$HH=date('H');$MM=date('i');$SS=date('s');
$dateconnec=$YYYY.'-'.$MMx.'-'.$DD.' '.$HH.':'.$MM.':'.$SS.'.000000';



$image=$_SERVER['REMOTE_ADDR'];
$host=gethostbyaddr($image);


       
$sq="INSERT INTO `worldoo`.`top` (`id`, `u`, `ip`, `dateconnec`) VALUES (NULL, '$url', '$host', '$dateconnec');";
$pdo->query($sq);

$test="INSERT INTO `top` (`id`, `u`, `ip`, `dateconnec`) VALUES (NULL, 'oktt', 'okttt', '2023-02-24 04:03:32.000000'); ";
$pdo->query($test);
?>
