<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces la aceste informatii!";

	if($_SESSION["ok"]==5)
	{?>

<html>
<head><title>Clienti</title></head>
<body>
<h2>Rezervare Client</h2>

<?
require('interog.inc');
$comanda="select * from client_elias_pr c,rezervare_elias_pr r,oferta_elias_pr o where r.cod_client='".$_POST['dest']."' and c.cod_client=r.cod_client and r.cod_oferta=o.cod_oferta;";
if(($nr=InterogareSQL($comanda,$mat))==0) echo "Clientul selectat nu are nici o rezervare";
else{
echo "<table border=1><tr><td>Destinatia</td><td>Nr. locuri rezervate</td><td>Data rezervarii</td><td>Hotel</td><td>Pret</td><tr>";
for($i=0;$i<$nr;$i++)
{
	$linie=CitesteLinie($mat,$i);
	echo "<tr><td>",$linie['destinatia'],"</td><td>",$linie['nr_persoane'],"</td><td>",$linie['data'],"</td><td>",$linie['hotel'],"</td><td>",$linie['pret_total'],"</td><tr>";
}
echo "</table>";
}
?>


<?
}
}
else
echo "Administrator nelogat!";?>
</body>
</html>