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
	{
	$_SESSION["idof"]=$_POST['dest'];?>
	<html>
<head><title>Rezervare</title>
<script>
function verifica()
	{
	var formular=document.f;
	if(formular.hotel_select.value=="--")
	{
	alert("Introduceti hotelul");
	return false;
	}
	return true;
	}
	</script>
</head>
<body>
<h2>Selectati hotelul</h2><br>
<form method="post" action="rezervare2.php" name="f">
Hotel
<select name="hotel_select">
<option value="--">--------------</option>
<?
require('interog.inc');
if(($nr=InterogareSQL("select * from  oferta_elias_pr where cod_oferta='".$_POST['dest']."';",$mat))==0) echo"Tablea vida";
else
{
for($i=0;$i<$nr;$i++)
{$linie=CitesteLinie($mat,$i);
$_SESSION["ht_ales"]=$linie['hotel1'];
echo "<option value='",$linie['hotel1'],"'>",$linie['hotel1'],"</option>";
echo "<option value='",$linie['hotel2'],"'>",$linie['hotel2'],"</option>";
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