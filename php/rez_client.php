<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces la aceste informatii!";

	if($_SESSION["ok"]==5)
	{?>

<html>
<head><title>Clienti</title>
<script>
function verifica()
	{
	var formular=document.f;
	if(formular.dest.value=="-----------------------------")
	{
	alert("Nu ati selectat nici un client");
	return false;
	}
	return true;
	}
	</script>
	</head>
<body>
<h2>Vizualizare rezervari facute de clienti</h2>
<form method="post" action="opereaza_rez_client.php" name="f">
Clientul
<select name="dest">
<option >-----------------------------</option>
<?
require('interog.inc');
if(($nr=InterogareSQL("select * from  client_elias_pr  ;",$mat))==0) echo"Tablea vida";
else
{
for($i=0;$i<$nr;$i++)
{$linie=CitesteLinie($mat,$i);
echo "<option value=",$linie['cod_client'],">",$linie['nume'],"   ",$linie['prenume'],"</option>";
}
}
?>
</select><br><br>
<input type="submit" value="Afiseaza" onClick="return verifica()">
</form>
<?
}
}
else
echo "Administrator nelogat!";?>
</body>
</html>