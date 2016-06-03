<style>
body {
	background-image: url("travel.jpg")
}
</style>
<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)
	{?>
	<html>
<head><title>Anulare rezervare</title>
<body>
<?
require('interog.inc');
//InterogareSQL("select * from rezervare_elias_pr where id_rez=".$_POST['anulare'].";", $ceva); 
//$linie2=CitesteLinie($ceva,0);
//$cod=$linie2['cod_oferta'];
//$l=$linie2['nr_persoane'];
//$ialoc="select * from oferta_elias_pr where cod_oferta='$cod';";
//InterogareSQL($ialoc,$rezultat);
//$linie1=CitesteLinie($rezultat,0);

//$loc_nou=(int)$linie1['nr_locuri'] + $l;
//$upd="update oferta_elias_pr set nr_locuri=$loc_nou where cod_oferta=$cod;";
//InterogareSQL($upd,$rez);
$comanda="delete from rezervare_elias_pr where id_rez=".$_POST['anulare'].";";
InterogareSQL($comanda,$mat);
echo "Rezervarea a fost anulata!";
}
}
else
echo "Client nelogat!";
?>
</body>
</html>