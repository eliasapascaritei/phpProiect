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
<head><title>Rezervare</title>
<body>
<?
require('interog.inc');
$calcul="select * from pret_elias_pr where cod_oferta=".$_SESSION["idof"].";";
InterogareSQL($calcul,$row);
$linie=CitesteLinie($row,0);
if($_SESSION["h_ales"]==1)
$total=$linie['pret1']*$_POST['locuri'];
else
$total=$linie['pret2']*$_POST['locuri'];
$comanda="insert into rezervare_elias_pr(cod_client,cod_oferta,data,nr_persoane,pret_total,hotel) values(".$_SESSION["cod_cl"].",".$_SESSION["idof"].",current_date,".$_POST['locuri'].",$total,'".$_SESSION['hotel_sel']."');";
InterogareSQL($comanda,$mat);
//$ialoc="select * from oferta_elias_pr where cod_oferta=".$_SESSION["idof"].";";
//InterogareSQL($ialoc,$rezultat);
//$linie1=CitesteLinie($rezultat,0);
//$loc_nou=(int)$linie1['nr_locuri'] - $_POST['locuri'];
//$upd="update oferta_elias_pr set nr_locuri=$loc_nou where cod_oferta=".$_SESSION["idof"].";";
//InterogareSQL($upd,$rez);
echo "Rezervare inregistrata!";
}
else echo "Sectiune destinata clientilor!";
}
else 
echo "Nu sunteti logat!";?>
</body>
</html>