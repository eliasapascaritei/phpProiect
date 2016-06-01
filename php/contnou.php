
<html>
<Head>
<title>Cont nou</title>

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
			if(formular.cnp.value == "" || !verific_numar(formular.cnp.value)) 
			{
			alert ("CNP incorect !");
			return false;
			}
			if(formular.nume.value == "") 
			{
			alert ("Introduceti numele !");
			return false;
			}
			if(formular.prenume.value == "") 
			{
			alert ("Introduceti prenumele !");
			return false;
			}
			if(formular.adresa.value == "") 
			{
			alert ("Introduceti adresa !");
			return false;
			}
			if(formular.telefon.value=="")
			{
			alert("Introduceti numar telefon!");
			return false;
			}
			if(formular.telefon.value.charAt(0)!='0' && !verific_numar(formular.telefon.value)) 
			{
			alert ("Telefon incorect!");
			return false;
			}
			if(formular.email.value == "") 
			{
			alert ("Introduceti email !");
			return false;
			}
			return true;
			}
		</script>
		</head>
<body>
<h2>Creare cont nou</h2>
<form action="opereaza_contnou.php" method="POST" name="f" >
<table>
<tr><td>Cnp:</td><td><input type="text" name="cnp"></td></tr>
<tr><td>Nume:</td><td><input type="text" name="nume"></td></tr>
<tr><td>Prenume:</td><td><input type="text" name="prenume"></td></tr>
<tr><td>Adresa:</td><td><input type="text" name="adresa"></td></tr>
<tr><td>Nr. telefon:</td><td><input type="text" name="telefon"></td></tr>
<tr><td>Email:</td><td><input type="text" name="email"></td></tr>
<tr><td><input type="submit" value="Adauga utilizator" onClick="return verifica()"/></td>
<td><input type="reset" value="Reset" ></td></tr>
</table>
</form>

</body>
</html>
			