<?
include('config.php');
?>
<!DOCTYPE html>
      <html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>Worldoo &reg; : Stats</title>
		



		<META NAME="ROBOTS" CONTENT="FOLLOW"/>
	

<style type="text/css">
*
{
margin:0 auto;
text-align:center;
}

</style>


		 </head>
<body>



<a href="/" target="_self">Worldoo.info - Stats</a><br /><br />

<div align="center">



<table border="1" width="600px" cellspacing="0" cellpadding="0">
<tr>
<td width="190" align="top" valign="top">
<?
		$YYYY=date('Y').'-'.date('m').'-'.date('d');

		//$dateconnecA=$k.'-'.$MMx.'-'.$DD;


				
$sql = "SELECT count(distinct(ip)) as yes from Astatic_worldoo WHERE temps LIKE '".$YYYY."%'";







					echo $YYYY." : ";


$res = $pdo->query($sql);
$count = $res->fetchColumn();

print "" .  $count . " visiteurs <br>";


		?>
