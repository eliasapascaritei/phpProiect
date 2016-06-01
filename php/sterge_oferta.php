<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces !";

	if($_SESSION["ok"]==5)
	{ ?>
<html>
<head><title>Oferte</title>
<script>
function verifica()
{
var formular=document.f;
if(formular.codacest.value=="")
{
alert("Introduceti codul ofertei");
return false;
}
return true;
}
</script>
</head>
<body>
<form action="opereaza_sterge_oferta.php" method="POST" name="f">
<h2>Ofertele sunt</h2>
<table border=1><tr><td>Cod oferta</td><td>Destinatie</td><td>Data inceperii</td></tr>
<?
require('interog.inc');
$comanda="select * from oferta_elias_pr;";
if(($nr=InterogareSQL($comanda,$mat))==0) echo "Tabela vida";
else{
for($i=0;$i<$nr;$i++)
{
	$linie=CitesteLinie($mat,$i);
	echo "<tr><td>",$linie['cod_oferta'],"</td><td>",$linie['destinatia'],"</td><td>",$linie['data1'],"</td></tr>";
}
}?>
</table>
<table><tr>
<td>Cod Oferta</td><td>
<input type="text" name="codacest"></td></tr>
</tr><td></td><td>
<input type="submit" value="Sterge" name="sterge" onClick="return verifica()"></td></tr></table>

<?
}
}
else
echo "Administrator nelogat!";?>
</form>
</body>
</html>
