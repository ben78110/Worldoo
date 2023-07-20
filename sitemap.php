<?php
include_once('config.php');







$sql="SELECT distinct(mot) as nn FROM cherche";

$rek=$pdo->query($sql);


// date complete pour mise à jour de dateconnec
// qui est en DATETIME donc YYYY-MM-DD HH:MM:SS
$YYYY=date('Y');
$MMx=date('m');
$DD=date('d');
$HH=date('H');
$MM=date('i');
$SS=date('s');


$date_actuelle=$YYYY.'-'.$MMx.'-'.$DD;


$sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
 
<url>
  <loc>https://www.worldoo.info/</loc>
  <lastmod>".$date_actuelle."</lastmod>
  <changefreq>weekly</changefreq>
  <priority>1.0</priority>
 </url>
";






while ($data = $rek->fetch()){

$p=$data['nn'];



$mystring = $p;
$findme   = '/';
$pos = strpos($mystring, $findme);

if ($pos === false || $pos == false) {

   	$sitemap = $sitemap.'<url>
	<loc>https://www.worldoo.info/?m='.$p.'</loc>
	<changefreq>weekly</changefreq>
	<priority>0.9</priority>
	</url>';
} else {
}



$mystring = $p;
$findme   = '<';
$pos = strpos($mystring, $findme);

if ($pos === false) {

   	$sitemap = $sitemap.'<url>
	<loc>https://www.worldoo.info/?m='.$p.'</loc>
	<changefreq>weekly</changefreq>
	<priority>0.9</priority>
	</url>';
} else {
}



$mystring = $p;
$findme   = '(';
$pos = strpos($mystring, $findme);

if ($pos === false) {

   	$sitemap = $sitemap.'<url>
	<loc>https://www.worldoo.info/?m='.$p.'</loc>
	<changefreq>weekly</changefreq>
	<priority>0.9</priority>
	</url>';
} else {
}



$mystring = $p;
$findme   = ')';
$pos = strpos($mystring, $findme);

if ($pos === false) {

   	$sitemap = $sitemap.'<url>
	<loc>https://www.worldoo.info/?m='.$p.'</loc>
	<changefreq>weekly</changefreq>
	<priority>0.9</priority>
	</url>';
} else {
}










a:

}

	
$sitemap = $sitemap.'</urlset>';


// votre code;
$fp = fopen("sitemap.xml","w");
fputs($fp, "$sitemap"); // on écrit le nom et email dans le fichier
fclose($fp);
echo "Fichier SiteMap Google Mis à jour !";

?>
