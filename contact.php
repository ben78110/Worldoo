<?php
header('Content-Type: text/html; charset=UTF-8');
// Désactiver le rapport d'erreurs
error_reporting(0);
include('config.php');
?>
<!DOCTYPE html>
      <html lang="fr" xml:lang="fr>">

<head>
		<META NAME="ROBOTS" CONTENT="ALL" />
		<META NAME="REVISIT-AFTER" CONTENT="1 days" />

<title>Contact</title>
<link rel="stylesheet" media="screen" type="text/css" title="Style" href="freedream.css" />





</head><body><div style="align:center;">
<?php

if ($_GET['k']==1){


$message=$_POST['message'];

$email=$_POST['email'];

$telephone=$_POST['telephone'];

$ip=$_SERVER['REMOTE_ADDR'];

	// date complete pour mise à jour de dateconnec
		// qui est en DATETIME donc YYYY-MM-DD HH:MM:SS
$YYYY=date('Y');$MMx=date('m');$DD=date('d');$HH=date('H');$MM=date('i');$SS=date('s');
		$dateconnec=$YYYY.'-'.$MMx.'-'.$DD.' '.$HH.':'.$MM.':'.$SS;


$sql="INSERT INTO `contact` (`message`, `email`, `telephone`, `ip`, `dateconnec`) VALUES ('$message','$email','$telephone','$ip','$dateconnec');";
//echo $sql;

$rek=$pdo->query($sql);
		
	
if ($rek)
{
echo "<div style='background-color:red;color:yellow;width:40%;border:3px solid #000;'>Message Envoyé !!!</div>";
}
else
{
echo "<br />Probleme de requette SQL : ".$sql;
}

	}

?>


<fieldset class="tout"><legend>
CONTACT
</legend><br /><form action="?k=1" method="post">

Votre Email svp :<br />
<input type="text" size="35" style="size:1em;" name="email"><br />

Votre numéro de téléphone svp : <br><input type="text" style="size:1em;" name="telephone"><br />
Votre Message : <br />
<textarea cols="25" rows="10" name="message" style="font-family:Verdana;size:1em;text-align:left;"></textarea>
<br /><br />
		<input type="submit" value="Envoyer !">

		</form>

		</fieldset><br />


<a href="http://freedream.org" title="Films" alt="Films">Retour sur FreeDream.org</A></body></html>
