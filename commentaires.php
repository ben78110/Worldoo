<!DOCTYPE html>
      <html lang="fr" xml:lang="fr">

<?php
include("config.php");
error_reporting(1);

?>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="fr">
<title><?=$title;?></title>
<META name="description" content="<?=$d;?>"/>
<link rel="stylesheet" media="screen" type="text/css" title="Style" href="https://sitedenews.com/site-de-news.css" />

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<style>
body  {
  background-image: url("https://sitedenews.com/pixel.png");
}
</style>
</head>
<body><div align="center" style="margin:0 auto;color:#FFF;size:2em;border:1px solid blue;padding 20 20 20 20;background-color:red;width:600px;margin:0 auto;-moz-border-radius:40px;background-color:#FFF;-webkit-border-radius: 40px;border-radius: 40px;padding:10px;">
<a href="/" title="Site De News">
<img src="favicon.ico" border="0">
<a href="https://WorldOO.info" title="Cliquez ici pour revenir à l'accueil"><font size="4" color="darkblue">WorldOO.Info</font></a></div><br />
<br>
<br><br>



<div style="align:center;">
<?php

if ($_GET['k']=="1"){


$message=$_POST['message'];

$email=$_POST['email'];



$ip=$_SERVER['REMOTE_ADDR'];

	// date complete pour mise à jour de dateconnec
		// qui est en DATETIME donc YYYY-MM-DD HH:MM:SS
$YYYY=date('Y');$MMx=date('m');$DD=date('d');$HH=date('H');$MM=date('i');$SS=date('s');
		$dateconnec=$YYYY.'-'.$MMx.'-'.$DD.' '.$HH.':'.$MM.':'.$SS;
//INSERT INTO `commentaires` (`id`, `message`, `email`, `ip`, `url`) VALUES (NULL, 'zen', NULL, NULL, 'cool.com'); 

$sql="INSERT INTO `commentaires` (`id`, `message`, `email`, `ip`, `url`) VALUES (NULL,'$message','$email','$ip','".$_GET['url']."');";


$rek=$pdo->query($sql);
		
	
if ($rek)
{
echo "<div style='background-color:red;color:yellow;width:40%;border:3px solid #000;margin:0 auto;'>Commentaire Envoyé !!!</div>";
}
else
{
echo "<br />Probleme de requette SQL : ".$sql;
}

	}

?>


<fieldset style="background-color:#FFF;width:600px;margin:0 auto;"><legend style="background-color:#FFF;padding:20px;border:1px solid blue;-moz-border-radius: 40px;
-webkit-border-radius: 40px;border-radius: 40px;">
Commentaire pour <?=$_GET['url'];?>
</legend><br /><form action="commentaires.php?k=1&url=<?=$_GET['url'];?>" method="post">

Votre Email svp :<br />
<input type="text" size="35" style="size:1em;" name="email"><br />


Votre Message : <br />
<textarea cols="25" rows="10" name="message" style="font-family:Verdana;size:1em;text-align:left;"></textarea>
<br /><br />
		<input type="submit" value="Envoyer !">

		</form>

		</fieldset><br />
		
<br><br>
<?php


echo "<div style='border:1px solid blue;padding 20 20 20 20;background-color:#FFF;width:600px;margin:0 auto;-moz-border-radius:40px;background-color:#FFF;-webkit-border-radius: 40px;border-radius: 40px;padding:10px;'>";

$sqli='SELECT * FROM commentaires WHERE url="'.$_GET['url'].'"';
$requetei = $pdo->query($sqli);





while($r = $requetei->fetch())
{





echo $r['message'].'<br><br>';


}



?>

<a href="https://worldoo.info" target="_self">Retour</a></div><br>



</body></html>

