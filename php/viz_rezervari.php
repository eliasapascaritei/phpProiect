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
<head><title>Rezervari</title>
</head>
<body>
<h2>Rezervarile facute de dumneavoastra</h2><br><br>
<form method="post" action="rezervare1.php" name="f">
</br>
<?
	require('interog.inc');
	$query="select* from oferta_elias_pr o, rezervare_elias_pr r,client_elias_pr c where o.cod_oferta=r.cod_oferta and r.cod_client=c.cod_client and r.cod_client='".$_SESSION["cod_cl"]."';";
	if( ($nr=InterogareSQL($query, $mat))==0) echo "Tabela vida";
	else{?>
	<table id="oferte" border=1>
	<tr><td>Destinatia</td><td>nr zile</td><td>nr locuri</td><td>transport</td><td>Data inceperii</td><td>Data incheierii</td><td>hotel </td><td>pret (EURO) </td></tr>
	<?	for($i = 0; $i < $nr; $i ++){
	$row = CitesteLinie($mat, $i);
	echo "<tr><td>",$row['destinatia'],"</td><td>",$row['nr_zile'],"</td><td>",$row['nr_persoane'],"</td><td>",$row['transport'],"</td><td>",$row['data1'],"</td><td>",$row['data2'],"</td><td>",$row['hotel'],"</td><td>",$row['pret_total'],"</td></tr>";
	
	
	}?>
	</table>
<?}?>
<?}
else echo "Sectiune destinata clientilor!";
}
else 
echo "Nu sunteti logat!";
	
	?>

</body>
</html>