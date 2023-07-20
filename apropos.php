<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		

		<link rel="stylesheet" media="screen" type="text/css" title="Style" href="a.css">

	</head>
<body>



<div align="center">

<br /><h2>Plus de détails sur Worldoo.info</h2>
<br>
<?php

for ($i=1;$i<=13;$i++){

?>
<img src="./images/a<?=$i;?>.jpg" width="600" height="600" border="0">

<br>
<?
}
include("config.php");


$sq="SELECT count(*) as nb FROM comz";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .COM au total<br><br>';

$sq="SELECT count(*) as nb FROM org";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .ORG au total<br><br>';

$sq="SELECT count(*) as nb FROM net";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .NET au total<br><br>';


$sq="SELECT count(*) as nb FROM photos";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .PHOTOS au total<br><br>';

$sq="SELECT count(*) as nb FROM xyz";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .XYZ au total<br><br>';

$sq="SELECT count(*) as nb FROM porn";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .PORN au total<br><br>';

$sq="SELECT count(*) as nb FROM sex";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .SEX au total<br><br>';

$sq="SELECT count(*) as nb FROM sexy";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .SEXY au total<br><br>';

$sq="SELECT count(*) as nb FROM name";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .NAME au total<br><br>';
$sq="SELECT count(*) as nb FROM top_domain";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .TOP au total<br><br>';
$sq="SELECT count(*) as nb FROM pro";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' .PRO au total<br><br>';
$sq="SELECT count(*) as nb FROM top";
$re=$pdo->query($sq);
while ($da = $re->fetch())
	{
	$prix=$da['nb'];	
	}
echo $prix.' VOTES uniques au total<br><br>';



?>
<br />Worldoo.info a été créé depuis l'année 2012 jusqu'à aujourd'hui.<br />
Constamment amélioré, re-programmé, testé, uniquement par moi même.<br />
Des Questions, Suggestions, Remarques : <br />
webmaster@worldoo.info

<br /><br />
Le but n'etant pas de "concurrencer" Google, mais c'est un défi, plutôt un paris que j'ai décidé seul de me lancer dans cette programmation.<br />
Le site WorldOO.info ne "fiche" ou ne "flique" personne, parce que, sincérement, je m'en fiche, ce l'est pas le but de WorldOO.info tout simplement !<br />Ce sont des très longues lignes de codes pour de la recherche de tout type.<br />De plus <u>Personne n'accède à vos données car tout y est completement <strong>Anonyme</strong></U>.
<br />
<font size="4" color="blue">Je crée des sites web sur mesure, n'hésitez pas à me contacter.</font>
<br />

</div>
</body></html>
