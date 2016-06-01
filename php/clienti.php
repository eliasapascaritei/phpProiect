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
<h2>Clienti</h2>
<table border=1><tr><td>CNP</td><td>Nume</td><td>Prenume</td><td>Adresa</td><td>Telefon</td><td>Email</td><tr>
<?
require('interog.inc');
$comanda="select * from client_elias_pr;";
if(($nr=InterogareSQL($comanda,$mat))==0) echo "Tabela vida";
else{
for($i=0;$i<$nr;$i++)
{
	$linie=CitesteLinie($mat,$i);
	echo "<tr><td>",$linie['cod_client'],"</td><td>",$linie['nume'],"</td><td>",$linie['prenume'],"</td><td>",$linie['adresa'],"</td><td>",$linie['telefon'],"</td><td>",$linie['email'],"</td><tr>";
}
}?>
</table>

<?
}
}
else
echo "Administrator nelogat!";?>
</body>
</html>