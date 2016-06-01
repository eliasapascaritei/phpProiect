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
<?
require('interog.inc');

$comanda="delete from oferta_elias_pr where cod_oferta=".$_POST['codacest'].";";
InterogareSQL($comanda,$mat);
//$comanda1="delete from pret_elias_pr where cod_oferta=".$_POST['codacest'].";";
//InterogareSQL($comanda1,$mat1);

echo "Oferta a fost stearsa din baza de date!";
}
}
else
echo "Administrator nelogat!";
?>
</body>
</html>