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
<script>
function verifica()
	{
	var formular=document.f;
	if(formular.anulare.value=="-----------------------------")
	{
	alert("Selectati rezervarea!");
	return false;
	}
	return true;
	}
	</script>
</head>
<body>
<h2>Selectati rezervarea</h2><br>
<form method="post" action="opereaza_anulare.php" name="f">
Destinatia
<select name="anulare">
<option >-----------------------------</option>
<?
require('interog.inc');
if(($nr=InterogareSQL("select * from  rezervare_elias_pr r,oferta_elias_pr o where r.cod_client='".$_SESSION["cod_cl"]."' and o.cod_oferta=r.cod_oferta;",$mat))==0) echo"Tablea vida";
else
{
for($i=0;$i<$nr;$i++)
{$linie=CitesteLinie($mat,$i);
echo "<option value=",$linie['id_rez'],">",$linie['destinatia'],"</option>";
}
}
?>
</select><br><br>
<input type="submit" value="Anulare" onClick="return verifica()">
</form>
<?}
else echo "Sectiune destinata clientilor!";
}
else 
echo "Nu sunteti logat!";
	
	?>
</body>
</html>