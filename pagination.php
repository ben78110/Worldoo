<br /><div style="background-color:#FFF;">
<?php // NAVIGATION

// Des fiches avant ?
if($Ndeb > 0) { ?>
   
      <A href="?m=<?=$_GET['m']?>">[D&eacute;but]</A>
     <A href="?m=<?=$_GET['m']?>&n=<?=$_GET['n']; ?>&p=<? echo (floor($Ndeb/$Nmax)-$Nmax)+1; ?>">[Retour]</A>

<? } ?>

<? // Page courante
$Npag = floor($Ndeb/$Nmax); $Npag2 = $Npag-1;

if ($Npag==0)
$Npag=1;

$tmp = "<b>" . $Npag . "</b>";
// Max 9 pages avant
while(($Npag2>0)&&($Npag2>$Npag-10)) {
   $tmp = "<A href='?m=".$_GET['m']."&n=".$_GET['n']."&p=" . ($Npag2) . "&taille=".$_GET['taille']."' title='".$_GET['m']." - Page ".$Npag2."'>["
      . $Npag2 . "]</A> " . $tmp;
   $Npag2--;
}
// Max 9 pages après
$Npag2 = $Npag;
while(($Npag2*$Nmax<=$Ntotal)&&($Npag2<$Npag+9)) {
   $Npag2++;
   $tmp .= " <A href='?m=".$_GET['m']."&n=".$_GET['n']."&p=" . ($Npag2) . "&taille=".$_GET['taille']."' title='".$_GET['m']." - Page ".$Npag2."'>["
      . $Npag2 . "]</A>";
}
echo $tmp;
// Des fiches après ?
if($Ntotal>$Ndeb+$Nmax) { ?>
  
    <A href="?m=<?=$_GET['m']?>&n=<?=$_GET['n']; ?>&p=<? echo ($Npag2)?>&<? if ($_GET['taille']=='grand'){ ?>taille=grand<?}?>">[Suite]</A>
   
<? } ?></div>
<br />
