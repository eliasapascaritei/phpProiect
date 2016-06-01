<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces !";

	if($_SESSION["ok"]==5)
	{ ?>
<html>
<head><title>Cautare</title>
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
	if(formular.cautare.value=="" || !verific_numar(formular.cautare.value))
	{alert("Nu ati introdus nimic!");
	return false;}
	return true;
	}
	
	
</script>

</head>
<body>
<form action="opereaza_client_telefon.php" method="POST" name="f">
<h2>Cautare client</h2>
<table><tr>
<td>Telefon</td>
<td><input type="text" name="cautare"></td></tr>
<tr><td><input type="submit" value="Cauta" onClick="return verifica()"></td></tr></table>

<?
}
}
else
echo "Administrator nelogat!";?>
</form>
</body>
</html>