<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces !";

	if($_SESSION["ok"]==5)
	{?>
<html>
<head><title>Sterge oferta</title></head>
<body>
<h2>Clienti</h2>

<?
require('interog.inc');
$comanda="select * from client_elias_pr where prenume='".$_POST['cautare']."';";
if(($nr=InterogareSQL($comanda,$mat))==0) echo "Client inexistent!";
else{
echo "<table border=1><tr><td>CNP</td><td>Nume</td><td>Prenume</td><td>Adresa</td><td>Telefon</td><td>Email</td><tr>";
for($i=0;$i<$nr;$i++)
{
$linie=CitesteLinie($mat,$i);
echo "<tr><td>",$linie['cod_client'],"</td><td>",$linie['nume'],"</td><td>",$linie['prenume'],"</td><td>",$linie['adresa'],"</td><td>",$linie['telefon'],"</td><td>",$linie['email'],"</td></tr>";
}echo "</table>";
}?>


<?
}
}
else
echo "Administrator nelogat!";?>
</form>
</body>
</html>