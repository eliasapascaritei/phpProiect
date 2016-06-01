<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces !";

	if($_SESSION["ok"]==5)
	{ ?>
<html>
<head><title>Cauta Clienti</title></head>
<body>
<a href="client_nume.php"><h2>Cauta client dupa nume</h2></a><br><br>
<a href="client_prenume.php"><h2>Cauta client dupa prenume</h2></a><br><br>
<a href="client_adresa.php"><h2>Cauta client dupa adresa</h2></a><br><br>
<a href="client_telefon.php"><h2>Cauta client dupa telefon</h2></a><br><br>
<?
}
}
else
echo "Administrator nelogat!";?>
</body>
</html>