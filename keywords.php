<?
include('config.php');
?>
<!DOCTYPE html>
      <html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>Worldoo &reg;</title>
		



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

<?		
$sql = "SELECT * from cherche";

$rek=$pdo->query($sql);
while ($d=$rek->fetch())
{


echo '<a href="http://worldoo.info/?m='.$d["mot"].'">'.$d["mot"].'</a> ';

}
?>
