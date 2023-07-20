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
		$k=date('Y');
		$p=3;

		for ($j=$p;$j<=12;$j++)
		{

		if ($j<10)
		$j='0'.$j;



		$zi=01;
		
					for ($i=$zi;$i<=31;$i++)
					{

					if ($i<10)
					$i='0'.$i;
		$DD=$i;
		$MMx=$j;



		$dateconnecA=$k.'-'.$MMx.'-'.$DD;


				
$sql = "SELECT count(distinct(ip)) as yes from Astatic_worldoo WHERE temps LIKE '".$dateconnecA."%'";








					echo "".$k."/".$j."/".$i." : ";


$res = $pdo->query($sql);
$count = $res->fetchColumn();

print "" .  $count . " visiteurs <br>";


			}



		}

		?>
