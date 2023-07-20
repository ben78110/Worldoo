<?php



function microtime_float() {
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$debut_temps = microtime_float();



include("config.php");

$l=$_GET['l'];


if (($_GET['m'])<>''){
$k=$_GET['m'];


$k=stripslashes($k);





$k=str_replace('á','a',$k);
$k=str_replace('Á','A',$k);
$k=str_replace('â','a',$k);
$k=str_replace('Â','A',$k);
$k=str_replace('à','a',$k);
$k=str_replace('À','A',$k);
$k=str_replace('å','a',$k);
$k=str_replace('Å','A',$k);
$k=str_replace('ã','a',$k);
$k=str_replace('Ã','A',$k);
$k=str_replace('ä','a',$k);
$k=str_replace('Ä','A',$k);
$k=str_replace('æ','ae',$k);
$k=str_replace('Æ','AE',$k);
$k=str_replace('ç','c',$k);
$k=str_replace('Ç','C',$k);
$k=str_replace('é','e',$k);
$k=str_replace('É','E',$k);
$k=str_replace('ê','e',$k);
$k=str_replace('Ê','E',$k);
$k=str_replace('è','e',$k);
$k=str_replace('È','E',$k);
$k=str_replace('ë','e',$k);
$k=str_replace('Ë','E',$k);
$k=str_replace('í','i',$k);
$k=str_replace('Í','I',$k);
$k=str_replace('î','i',$k);
$k=str_replace('Î','I',$k);
$k=str_replace('ì','i',$k);
$k=str_replace('Ì','I',$k);
$k=str_replace('ï','i',$k);
$k=str_replace('Ï','I',$k);
$k=str_replace('ñ','n',$k);
$k=str_replace('Ñ','N',$k);
$k=str_replace('ó','o',$k);
$k=str_replace('Ó','O',$k);
$k=str_replace('ô','o',$k);
$k=str_replace('Ô','O',$k);
$k=str_replace('ò','o',$k);
$k=str_replace('Ò','O',$k);
$k=str_replace('ø','o',$k);
$k=str_replace('Ø','O',$k);
$k=str_replace('õ','o',$k);
$k=str_replace('Õ','O',$k);
$k=str_replace('ö','o',$k);
$k=str_replace('Ö','O',$k);
$k=str_replace('œ','oe',$k);
$k=str_replace('ŒO','Elig',$k);
$k=str_replace('š','s',$k);
$k=str_replace('Š','S',$k);
$k=str_replace('ß','s',$k);
$k=str_replace('ð','e',$k);
$k=str_replace('ï','i',$k);
$k=str_replace('Ï','I',$k);
$k=str_replace('ñ','n',$k);
$k=str_replace('Ñ','N',$k);
$k=str_replace('ó','o',$k);
$k=str_replace('ó','o',$k);
$k=str_replace('þ','t',$k);
$k=str_replace('Þ','T',$k);
$k=str_replace('ú','u',$k);
$k=str_replace('Ú','U',$k);
$k=str_replace('û','u',$k);
$k=str_replace('Û','U',$k);
$k=str_replace('ù','u',$k);
$k=str_replace('Ù','U',$k);
$k=str_replace('ü','u',$k);
$k=str_replace('Ü','U',$k);
$k=str_replace('ý','y',$k);
$k=str_replace('Ý','Y',$k);
$k=str_replace('ÿ','y',$k);
$k=str_replace('Ÿ','Y',$k);
$k=str_replace('Ì','I',$k);
$k=str_replace('ï','i',$k);
$k=str_replace('Ï','I',$k);
$k=str_replace('ñ','n',$k);
$k=str_replace('Ñ','N',$k);



$k=str_replace('+','-',$k);

$k=str_replace('%20','-',$k);


$k=str_replace(' ','-',$k);


}













$l='fr';



$poso=strpos($k, '<');
if ($poso !== false){
goto b;
}

$pos1=strpos($k, '*');
if ($pos1 !== false){
goto b;
}

$pos2=strpos($k, '>');
if ($pos2 !== false){
goto b;
}

$pos3=strpos($k, ';');
if ($pos3 !== false){
goto b;
}


$pos4=strpos($k, '\'');
if ($pos4 !== false){
goto b;
}

$pos5=strpos($k, '"');
if ($pos5 !== false){
goto b;
}


$pos6=strpos($k, ",");
if ($pos6 !== false){
goto b;
}

$pos7=strpos($k, ';');
if ($pos7 !== false){
goto b;
}


$pos8=strpos($k, '=');
if ($pos8 !== false){
goto b;
}



$pos11=strpos($k, '*');
if ($pos11 !== false){
goto b;
}

$pos12=strpos($k, '{');
if ($pos12 !== false){
goto b;
}

$pos13=strpos($k, '/');
if ($pos13 !== false){
goto b;
}
$l=$_GET['l'];
?>
<!DOCTYPE html>
      <html lang="fr" xml:lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta http-equiv="Content-Language" content="<?php
								if ($l == 'fr')
								{echo 'fr';}
								else if ($l == 'de')
								{echo 'de';}
								else if ($l == 'es')
								{echo 'es';}
								else if ($l == 'en')
								{echo 'en';}
								else if ($l == 'zh')
								{echo 'zh';}
								else if ($l == 'ar')
								{echo 'ar';}
								else echo 'fr';

								?>">


		<title><?php
if (isset($k) && ($k)<>'')
{
echo stripslashes($k).' - WorldOO.Info';
}
else if ($l == 'fr')
{echo 'WoldOO.Info Recherche Independant';}
else if ($l == 'de')
{echo 'WorldOO.Info Freie Deutsche Suchmaschine Uunabh&auml;ngige';}
else if ($l == 'es')
{echo 'WorldOO.Info Motor de b&uacute;squeda Gratis e Independiente';}
else if ($l == 'en')
{echo 'WorldOo.Info Free Search Engine';}
else if ($l == 'zh')
{echo '免费搜索引擎，免费及独立';}
else if ($l == 'ar')
{echo 'محرك البحث من الجودة حرة ومفتوحة والمستقلة';}
else echo 'WoldOO.Info';


if (isset($_GET['p'])){
$page=$_GET['p'];
echo ' [Page '.$page.']';
}

?></title>


				
		<META name="description" lang="<?php
								if ($l == 'fr')
								{echo 'fr';}
								else if ($l == 'de')
								{echo 'de';}
								else if ($l == 'es')
								{echo 'es';}
								else if ($l == 'en')
								{echo 'en';}
								else if ($l == 'zh')
								{echo 'zh';}
								else if ($l == 'ar')
								{echo 'ar';}
								else echo 'fr';
								?>" content="<?php
if (isset($k) && ($k)<>'')
{
echo 'Worldoo.info : '.stripslashes($k);
}
else if ($l == 'fr')
{echo 'Worldoo.info est un Moteur de recherche Gratuit Indépendant et Anonyme. Vous pouvez y ajouter votre site internet Facilement.';}
else if ($l == 'de')
{echo 'Kompatibel deutsche Suchmaschine Worldoo.info';}
else if ($l == 'es')
{echo 'Motor de b&uacute;squeda para p&aacute;gina internet - Webmaster a&ntilde;ade tu p&aacute;gina internet gratis';}
else if ($l == 'en')
{echo 'Search Engine English / American Open, Free and Independent - Webmaster Add your Website Now';}
else if ($l == 'zh')
{echo 'Worldoo.info 是一个搜索引擎。您可以添加您的网站洒脱。';}
else if ($l == 'ar')
{echo 'Worldoo.info هو محرك البحث الحر والمستقل. يمكنك إضافة موقعك مجانا وسهل.';}
else echo 'Worldoo.info est un Moteur de recherche Gratuit Indépendant et Anonyme. Vous pouvez y ajouter votre site internet Facilement.';


if (isset($_GET['p'])){
$page=$_GET['p'];
echo ' - Page : '.$page;
}


?>"/>
		<META NAME="keywords" lang="<?php
								if ($l == 'fr')
								{echo 'fr';}
								else if ($l == 'de')
								{echo 'de';}
								else if ($l == 'es')
								{echo 'es';}
								else if ($l == 'en')
								{echo 'en';}
								else if ($l == 'zh')
								{echo 'zh';}
								else if ($l == 'ar')
								{echo 'ar';}
								else echo 'fr';
								?>" CONTENT="Worldoo,worldoo.info,<?php
if (isset($k) && ($k)<>'')
{
echo stripslashes($k);
}
else if ($l == 'fr')
{echo 'Moteur de recherche,anonyme,Webmaster,Moteur de recherche Français,webmestre,webmasters,webmestres,indépendant';}
else if ($l == 'de')
{echo 'Kompatibel deutsche Suchmaschine';}
else if ($l == 'es')
{echo 'Motor de b&uacute;squeda,Webmaster,p&aacute;gina internet,Webmasters,Independiente';}
else if ($l == 'en')
{echo 'Search Engine,search engine free,search engine independent,search engine english,search engine american,Webmaster,Website,Webmasters';}
else if ($l == 'zh')
{echo '搜索引擎，网站管理员，搜索引擎免费开放，站长，网站管理员，网站管理员，独立的法国';}
else if ($l == 'ar')
{echo 'محرك البحث، محرك البحث الحر، محرك البحث المستقل، محرك البحث باللغة الإنجليزية، محرك البحث الأمريكي، مشرفي المواقع، الموقع، المواقع';}
else echo 'Moteur de recherche,anonyme,Webmaster,Moteur de recherche Fran&ccedil;ais,webmestre,webmasters,webmestres,ind&eacute;pendant';

if (isset($_GET['p'])){
$page=$_GET['p'];

echo ' - Page : '.$page;
}


?>"/>

<link rel="alternate" hreflang="ae" href="./?l=ar"/>
<link rel="alternate" hreflang="cn" href="./?l=zh"/>
<link rel="alternate" hreflang="en" href="./?l=en"/>
<link rel="alternate" hreflang="es" href="./?l=es"/>
<link rel="alternate" hreflang="de" href="./?l=de"/>
<link rel="alternate" hreflang="fr" href="./?l=fr"/>
<link rel="alternate" href="http://worldoo.info/" hreflang="x-default" /> 

<link rel="alternate" href="http://worldoo.info/" hreflang="x-default" /> 


<link rel="stylesheet" media="screen" type="text/css" title="Style" href="world.css" />


<link rel="stylesheet" media="screen" type="text/css" title="Style" href="frame.css" />


<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<META NAME="ROBOTS" CONTENT="ALL" />
<META NAME="REVISIT-AFTER" CONTENT="1 days" />

<script type="text/javascript" src="autosuggest/jquery.js"></script>
<script type="text/javascript" src="autosuggest/jquery.watermarkinput.js"></script>

<script type="text/javascript">
<!--
$(document).ready(function(){
$(".search").keyup(function()
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;
if(searchbox=='')
{}
else
{
$.ajax({
type: "POST",
url: "autosuggest/search.php",
data: dataString,
cache: false,
success: function(html)
{
$("#display").html(html).show();
}
});
}return false;
});
});
jQuery(function($){
$("#searchbox").Watermark("Chercher");
});
-->
</script>

<script type="text/javascript">
<!--
function z(id){
   var img  = new Image();
   img.src = "hits.php?id=" + id;
}
-->
</script>

<?php
$YYYY=date('Y');$MMx=date('m');$DD=date('d');$HH=date('H');$MM=date('i');$SS=date('s');
$dateconnec=$YYYY.'-'.$MMx.'-'.$DD.' '.$HH.':'.$MM.':'.$SS.'.000000';

$image=$_SERVER['REMOTE_ADDR'];
$host=gethostbyaddr($image);



$sqlverif="SELECT ip FROM `Astatic_worldoo` WHERE `ip`='$host';";
$reky=$pdo->query($sqlverif);

while ($d = $reky->fetch())
	{
if ((strtolower($d['ip']))==(strtolower($host))){
goto c;
}}	


$pq="INSERT INTO `Astatic_worldoo` (`uid`,`ip`, `temps`) VALUES (NULL,'".$image."', '".$dateconnec."'); ";


$yres=$pdo->query($pq);
c:


if ($_POST['url']<>""){


$imageip=$_SERVER['REMOTE_ADDR'];

$sqlverifi="SELECT count(*) as nb FROM `note` WHERE `urlip`='".$_POST['url']."/".$imageip."';";
$rekyi=$pdo->query($sqlverifi);

while ($di = $rekyi->fetch())
	{
if ($di['nb']>0){
goto gg;
}}	








$pqt="INSERT INTO `note` (`urlip`, `note`) VALUES ('".$_POST['url']."/".$imageip."', '".$_POST['note']."');";

$pdo->query($pqt);
gg:

}





?>





<meta name="google-site-verification" content="bkagiufNyXBopFom_g70dOTTB7Xmji68sXv-d9_DJ_s" />


<script type="text/javascript">
function sub() {
 document.getElementById("fo" ).submit();
}
</script>
</head>


<?
if (empty($_GET['m'])){
?>	 
<body onload="document.getElementById('searchbox').focus()">

<?
}
else
{
echo "<body>";
}
?>
<div style="position:fixed;left:1px;bottom:1px;padding:5px;border:1px solid blue;-moz-border-radius:40px;background-color:#FFF;-webkit-border-radius: 40px;border-radius: 40px;"><a href="https://www.paypal.com/donate/?hosted_button_id=6NTA8UES33H8G" target="_blank"><font size="5" style="background-color:#FFF;">Don d'Argent par PayPal</font></a></div>

<div align="center">
<a href="https://www.worldoo.info" title="Moteur de Recherche Gratuit et Indépendant"><img src="/images/logo2.png">
</a><br /><br /><br /><br />
<form method="get" autocomplete="off" id="fo" action=""> 


<input id="searchbox" type="text" class="search" name="m" value="<? if (isset($k)){echo $k;};?>" style="text-align:left;margin:0 auto;border:3px solid orange;
-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px; -moz-box-shadow:0 0 15px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);background-color:#FFF;
-webkit-box-shadow:0 0 15px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);box-shadow:0 0 15px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);"><input type="submit" value="Go"><br />
<div id="display">
</div>

<div id="sortie" style="border:solid 0px;marging-left:-33px;overflow:auto;text-align:left;"></div> 
</form>



</div>
<?php

$Ntotal=100000;



if (!isset($_GET['p']))
$_GET['p']=1;



if ($k<>''){
echo '<h1 align="center">..: Page '.$_GET['p'].' :..</h1>';
$fintemps = microtime_float() - $debut_temps;



$Nmax=10;
if ($_GET['p']==1)
$Ndeb=0;
else
$Ndeb=$Nmax*($_GET['p']);




if ($k<>'')

?>


<br />
<div style="background:#FFFFFF;border:2px solid blue;width:550px;margin:0 auto;-moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;padding:10px 10px 10px 10px;text-align:center;">

<h2 align="center" style="background:#FFF;">Votre site web ici ?<br>Your Website Here ?</h2>
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1NSunkDqT6cdYBcC54iNS9ch"
  publishable-key="pk_live_51NPSc8DqT6cdYBcC1oKOHiBOd9D6oYmFmMQr9FTKCl2GmoQVpydkDh05Wihi4Tp7SdLJttHLhFZbm1Prq0pALEyc00Wl1IGaf3"
>
</stripe-buy-button>
</div><br>

<?php


$sqlveri="SELECT mot FROM `cherche`;";
$re=$pdo->query($sqlveri);

while ($do = $re->fetch())
	{
if ((strtolower($do['mot']))==(strtolower($k))){
goto d;
}}

$sql_a="INSERT INTO cherche (mot,temps,ip) VALUES ('$k','$dateconnec','$image')";
$re=$pdo->query($sql_a);

d:



$sql_b="UPDATE cherche SET temps='$dateconnec', ip='$image' WHERE mot='$k'";


$reb=$pdo->query($sql_b);

$sql2="SELECT u FROM sites_payant WHERE u LIKE '%".strtoupper($k)."%' LIMIT ".$Ndeb.",".$Nmax."";

$rek2=$pdo->query($sql2);


$sql27="SELECT u FROM top WHERE u LIKE '%".strtoupper($k)."%' LIMIT ".$Ndeb.",".$Nmax."";

$rektopi=$pdo->query($sql27);




$sql="SELECT u FROM comz WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek=$pdo->query($sql);

$sqlorg="SELECT u FROM org WHERE u LIKE '".strtolower($k)."%'  LIMIT ".$Ndeb.",".$Nmax."";
$rekorg=$pdo->query($sqlorg);



$sql3="SELECT u FROM sex WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek3=$pdo->query($sql3);

     

$sql4="SELECT u FROM porn WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek4=$pdo->query($sql4);

        

$sql5="SELECT u FROM sexy WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek5=$pdo->query($sql5);

   

$sql6="SELECT u FROM xyz WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek6=$pdo->query($sql6);

$sql7="SELECT u FROM photos WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek7=$pdo->query($sql7);

        
$sql8="SELECT u FROM top_domain WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek8=$pdo->query($sql8);
      
$sql9="SELECT u FROM pro WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek9=$pdo->query($sql9);
          
$sql10="SELECT u FROM name WHERE u LIKE '".strtolower($k)."%' LIMIT ".$Ndeb.",".$Nmax."";
$rek10=$pdo->query($sql10);
      
  


function worldoo_topi($z,$data){
echo "<div id='numero'><b>".$z."</b></div>";
	echo '<div id="blockquote">';
echo '<a href="http://www.'.$data['u'].'" target="_blank">'.strtolower($data['u']).'</a>';

echo '</div><br />';
};

     




function worldoo($z,$data,$pdo){
echo "<div id='numero'><b>".$z."</b></div><br>";
echo '<a href="http://www.'.$data['u'].'.com" onclick="z(\''.$data['u'].'.com'.'\');" target="_blank">';
	echo '<div id="blockquote">';

echo strtolower($data['u']).'.com</a><br><font color="red"><div style="background:#FFF;">Note : ';


$proute=strtolower($data['u']).'.com';

$s="SELECT avg(note) as caca FROM `note` WHERE `urlip` LIKE '".$proute."%';";
$remy=$pdo->query($s);

while ($dodo = $remy->fetch())
	{
echo $dodo['caca'];
}

echo '</div></font><br><a href="commentaires.php?url='.$proute.'" style="background:#FFF;" title="Cliquez ici pour poster un commentaire">Commentaires</a> - <a href="mailto:?subject=Moteur de Recherche&body=Bonjour, Visitez http://'.$proute.' depuis https://worldoo.info" style="background:#FFF;" >Partager</a><div style="float:right;right:5px;background:#FFF;">Donnez une Note : <form action="" method="post"><input type="hidden" value="'.strtolower($data['u']).'.com'.'" name="url"><select name="note" style="background:#FFF;"><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select> <input  style="background:#FFF;" type="submit"></form><br>';





echo '</div>';
echo '</div><br>';
};

     



function worldoo_extensions($z,$data,$ext,$pdo){
echo "<div id='numero'><b>".$z."</b></div><br>";

echo '<a href="http://www.'.$data['u'].'.'.$ext.'" target="_blank">';

echo '<div id="blockquote">';
echo strtolower($data['u']).'.'.$ext.'</a><br><font color="red"><div style="background:#FFF;">Note : ';

$proute=strtolower($data['u']).'.'.$ext;

$s="SELECT avg(note) as caca FROM `note` WHERE `urlip` LIKE '".$proute."%';";
$remy=$pdo->query($s);

while ($dodo = $remy->fetch())
	{
echo $dodo['caca'];
}

echo '</div></font><br><a href="commentaires.php?url='.$proute.'" style="background:#FFF;" title="Cliquez ici pour poster un commentaire">Commentaires</a> - <a href="mailto:?subject=Moteur de Recherche&body=Bonjour, Visitez http://'.$proute.' depuis https://worldoo.info" style="background:#FFF;" >Partager</a><div style="float:right;right:5px;background:#FFF;">Donnez une Note : <form action="" method="post"><input type="hidden" value="'.strtolower($data['u']).'.'.$ext.''.'" name="url"><select name="note" style="background:#FFF;"><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select> <input  style="background:#FFF;" type="submit"></form><br>';







echo '</div>';



echo '</div></a><br>';




};








function worldoo_payant($z,$data){

	echo '<div id="numero">'.$z;
	echo '</div>';
	echo '<div id="blockquote" style="background-color:#FFF;">';
	echo '<a href="'.strtolower($data['u']).'" target="_blank">'.strtolower($data['u']).'</a><div style="float:right;font-color:red;background-color:orange;border:2px solid pink;padding:8px 8px 8px 8px;font-size:0.65em;-moz-box-shadow:0 0 15px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);-webkit-box-shadow:0 0 15px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);box-shadow:0 0 15px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;"><a href="http://worldoo.info/webmasters.php" target="_blank">Lien Sponsorisé</a></div>';

	echo '</div>';
	echo '<br />';




	};






$i=0;

if (($_GET['p'])<>''){
$i=(($_GET['p'])-1)*$Nmax;
}

while ($datatopi = $rektopi->fetch())
	{
$i++;
worldoo_topi($i,$datatopi);

	}



while ($data2 = $rek2->fetch())
	{
	$i++;
	worldoo_payant($i,$data2);	
	}



while ($data = $rek->fetch())
	{
$i++;
worldoo($i,$data,$pdo);

	}
while ($dataorg = $rekorg->fetch())
	{
$i++;
$ext='org';
worldoo_extensions($i,$dataorg,$ext,$pdo);

	}
while ($data3 = $rek3->fetch())
	{
$i++;
$ext='sex';
worldoo_extensions($i,$data3,$ext,$pdo);

	}

while ($data4 = $rek4->fetch())
	{
$i++;
$ext='porn';
worldoo_extensions($i,$data4,$ext,$pdo);

	}

while ($data5 = $rek5->fetch())
	{
$i++;
$ext='sexy';
worldoo_extensions($i,$data5,$ext,$pdo);

	}
while ($data6 = $rek6->fetch())
	{
$i++;
$ext='xyz';
worldoo_extensions($i,$data6,$ext,$pdo);

	}
while ($data7 = $rek7->fetch())
	{
$i++;
$ext='photos';
worldoo_extensions($i,$data7,$ext,$pdo);

	}
while ($data8 = $rek8->fetch())
	{
$i++;
$ext='top';
worldoo_extensions($i,$data8,$ext,$pdo);

	}
while ($data9 = $rek9->fetch())
	{
$i++;
$ext='pro';
worldoo_extensions($i,$data9,$ext,$pdo);

	}


while ($data10 = $rek10->fetch())
	{
$i++;
$ext='name';
worldoo_extensions($i,$data10,$ext,$pdo);

	}
$time_end = microtime_float();
$time = $time_end - $debut_temps;
$fintemps=number_format($time, 3, ',', '&nbsp;'); 

echo '<div align="center" style="font-size:0.8em;">';

if ($l == 'fr')
     {echo 'Page charg&eacute;e en <b>'.$fintemps.'</b> Secondes.';}
else if ($l == 'de')
     {echo 'Ladezeit von dieser ganzen Seite <b>'.$fintemps.'</b> Sekunden.';}
else if ($l == 'es')
   {echo 'Tiempo de carga de todo este <b>P&aacute;gina '.$fintemps.'</b> segundos.';}
else if ($l == 'en')
   {echo 'Load time of this entire Page <b>'.$fintemps.'</b> Seconds. ';}
else if ($l == 'ar')
   {echo 'إذا كنت تعتقد في Worldoo.info من فضلك أعطني بعض i\'am المال وحده، ولكن تحفيز حقا أن وشى عليه باللغة العربية. <b>'.$fintemps.'</b>';}
else if ($l == 'zh')
   {echo '相信Worldoo.info并给予一定的资金来鼓励我，我是法国人，独自在这个项目上工作。<b>'.$fintemps.'</b>';}
else echo 'Page charg&eacute;e en <b>'.$fintemps.'</b> Secondes. ';
echo '</div><br><br><br />';

echo '<div align="center" style="border:1px solid darkblue;padding:10px;width:45%;margin:0 auto;border-radius:10px;box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);">';

echo '<div style="background:#FFF;">';

include("pagination.php");
?></div></div><br><br><div style="margin:0 auto;border:1px solid blue;width:500px;-moz-border-radius: 50px;
-webkit-border-radius: 50px;
border-radius: 50px;padding:20px;text-align:center;
-moz-box-shadow:0 0 45px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);
-webkit-box-shadow:0 0 45px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);
box-shadow:0 0 45px rgba(0,0,0,0.45),11px 12px 13px rgba(0,0,0,0.2);font-family:Verdana;background-color:#FFF;">
<br /><!-- Begin Allopass Checkout Code -->
<iframe width="770" height="550" style="max-width:100%;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://payment.allopass.com/buy/buy.apu?ids=357359&amp;idd=1559099">
</iframe>
<!-- Begin Allopass Checkout Code --></div><br />
<div align="center">
Faites  un lien vers notre site<br /><img src="./images/cadena.jpg" border="0" width="60" height="20"><br>
<input type="text" value="http://www.worldoo.info/?m=<?=$_GET['m'];?>&p=<?=$_GET['p'];?>" size="60">
<br /><br />


<br /></div><br />
<br />
<?

}


?>

<br />
<?


b:




?>
<div style="position:fixed;bottom:1px;right:1px;background-color:#FFF;"><a href="mailto:?subject=Moteur de Recherche&body=Bonjour, Visitez http://worldoo.info">Email</a> | <a href="help.php">Aide / Help</a> |
<a href="apropos.php">A propos</a> | 
<a href="https://www.rapide-rencontre.fr" target="_blank">Rapide Rencontre</a> | 
<a href="https://freedream.org" target="_blank">Vidéos</a> | 
<a href="https://www.mp4.st" target="_blank">MP4</a> | 

<a href="stats.php" target="_self">Statistiques</a>  |
<a href="sitemap.xml" target="_self">SiteMap</a> | 
<a href="https://sitedenews.com" target="_new">Réseau Social</a> | <a href="https://flowerflo.fr" target="_blank">Florence Peintures</a> | <a href="./clone/">Clones</a> | <a href="contact.php">Contact</a>
</div>
<br />
<br />
</body>
</html>
