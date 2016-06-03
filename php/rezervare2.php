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
	if($_POST['hotel_select']==$_SESSION["ht_ales"])
            $_SESSION["h_ales"]=1;
	else
            $_SESSION["h_ales"]=2;
	$_SESSION['hotel_sel']=$_POST['hotel_select'];?>
	<html>
<head><title>Rezervare</title>
<script>
function verific_numar(s)
	{
	for(i=0;i<s.length;i++)
	if( ! (s.charAt(i)>='0' && s.charAt(i)<='9'))
	return false;
	return true;
	}
function verifica()
	{
	var formular=document.f;
	if(formular.locuri.value=="")
	{
	alert("Introduceti numarul de locuri!");
	return false;
	}
	if(!verific_numar(formular.locuri.value))
	{alert("Nu ati introdus un numar!");
	return false;
	}
	if((int) formular.locuri.value > (int)$l )
	{alert("Nr de locuri indisponibile!");
	return false;
	}
	return true;
	}
</script>
</head>
<body>
<form method="post" action="opereaza_rezervare.php" name="f">
<?
require('interog.inc');
if(($nr=InterogareSQL("select * from  oferta_elias_pr where cod_oferta='".$_SESSION["idof"]."';",$mat))==0) echo"Tablea vida";
else
{
for($i=0;$i<$nr;$i++)
{$linie=CitesteLinie($mat,$i);
echo "Sunt diponibile   ",$linie['nr_locuri'],"  locuri!";
$l=$linie['nr_locuri'];
}
}?> 
<br><br><br>Introduceti numarul de locuri:
<input type=text name="locuri"><br><br><br>
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