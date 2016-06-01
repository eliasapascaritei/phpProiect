<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)
	{?>
	<html>
<head><title>Rezervare</title>
<script>
function verifica()
	{
	var formular=document.f;
	if(formular.dest.value=="-----------------------------")
	{
	alert("Introduceti destinatia");
	return false;
	}
	return true;
	}
	</script>
</head>
<body>
<h2>Selectati destinatia</h2><br>
<form method="post" action="rezervare1.php" name="f">
Destinatia
<select name="dest">
<option >-----------------------------</option>
<?
require('interog.inc');
if(($nr=InterogareSQL("select * from  oferta_elias_pr  ;",$mat))==0) echo"Tablea vida";
else
{
for($i=0;$i<$nr;$i++)
{$linie=CitesteLinie($mat,$i);
echo "<option value=",$linie['cod_oferta'],">",$linie['destinatia'],"</option>";
}
}
?>
</select><br><br>
<input type="submit" value="NEXT" onClick="return verifica()">
</form>
<?}
else echo "Sectiune destinata clientilor!";
}
else 
echo "Nu sunteti logat!";
	
	?>
</body>
</html>