<?php
session_start();
if(isset($_SESSION["ok"]))
{
	if($_SESSION["ok"]==1)echo "Trebuie sa fiti logat ca si Administrator pentru a avea acces la aceste informatii!";
 if($_SESSION["ok"]==5)
	{?>
 

<html>
<head><title>Adauga oferta</title>
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
	if(formular.destinatia.value=="")
	{alert("Introduceti destinatia");
	return false;
	}
	if(formular.zile.value=="")
	{alert("Introduceti numarul de zile!");
	return false;
	}
	if(!verific_numar(formular.zile.value))
	{alert("Nu ati introdus un numar!");
	return false;
	}
	if(formular.locuri.value=="")
	{alert("Introduceti numarul de locuri!");
	return false;
	}
	if(!verific_numar(formular.locuri.value))
	{alert("Nu ati introdus un numar!");
	return false;
	}
	if(formular.transport.value=="")
	{alert("Introduceti categoria de transport!");
	return false;
	}
	if(formular.data.value=="")
	{alert("Introduceti data!");
	return false;
	}
	if(formular.hotel1.value=="")
	{alert("Introduceti hotel 1!");
	return false;
	}
	if(formular.pret1.value=="")
	{
	alert("Introduceti pret!");
	return false;
	}
	if(!verific_numar(formular.pret1.value))
	{alert("Pretul tb sa contina doar cifre!");
	return false;
	}
	if(formular.hotel2.value=="")
	{alert("Introduceti hotel 2!");
	return false;
	}
	if(formular.pret2.value=="")
	{
	alert("Introduceti pret!");
	return false;
	}
	if(!verific_numar(formular.pret2.value))
	{alert("Pretul tb sa contina doar cifre!");
	return false;}
	return true;
	}
	
	
</script>
</head>
<body>
<h2>Adauga oferta</h2>
<form method="post" action="opereaza_add_oferta.php" name="f">
<table><tr>
<td>Destinatia:</td>
<td><input type="text" name="destinatia"></td></tr>
<tr><td>Nr. zile</td><td><input type="text" name="zile"></td></tr>
<tr><td>Nr. Locuri</td><td><input type="text" name="locuri"></td></tr>
<tr><td>Transport</td><td><input type="text" name="transport"></td></tr>
<tr><td>Data inceperii</td><td><input type="text" name="data"></td><td>(YYYY-MM-DD)</td></tr>
<tr><td>Hotel 1</td><td><input type="text" name="hotel1"></td><td>Pret<input type="text" name="pret1"></td></tr>
<tr><td>Hotel 2</td><td><input type="text" name="hotel2"></td><td>Pret<input type="text" name="pret2"></td></tr>
<tr><td><input type="submit" value="Adauga" name="adauga" onClick="return verifica()" ></td>
<td><Input type="reset" value="Reset" name="Reset"></td></tr>
</table>
<?}
}
else 
echo "Administrator nelogat!";
	
	?>
</body>
</html>
