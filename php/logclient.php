<?php
ob_start();
require('interog.inc');
if( isset($_POST['autentificare']) )
{
$query="SELECT * FROM client_elias_pr WHERE nume = '".$_POST["utilizator"]."' and cod_client='".$_POST["parola"]."'";
  if(($nr=InterogareSQL($query,$mat))!=0)
    {
	//crearea unei sesiuni
	session_start();
	$row=CitesteLinie($mat,0);
	
	//setarea variabilei de sesiune
	$_SESSION["ok"] = 1;
	$_SESSION["utilizator"]=$_POST["utilizator"];
	$_SESSION["nume"]=$row["nume"];
	$_SESSION["prenume"]=$row["prenume"];
	$_SESSION["cod_cl"]=$row["cod_client"];
	
	//redirectarea catre alta pagina
	header("location:start_client.php"); 
    }
	else
	{
	header("location:logclient.php");
	}
}
?>
	<html>
	<head> 
	<title>Log</title>
<script>	
		function valideaza()
		{
		 document.f.parola.value=MD5(document.f.parola.value);
		}
	</script></head>
	</body>
	<div class="wrap">
	<form method="post" name="f" action="logclient.php">
	 <div align=center> 
	    <table>
	    <tr>
		<td>Utilizator:</td>
		<td><input type="text" name="utilizator"></td>
	    </tr>
	    <tr>
		<td>CNP:</td>
		<td><input type="password" name="parola"></td>
	    </tr>
	    <tr>
		<td><input type="submit" name="autentificare" value="Autentificare" onClick="return valideaza()"></td>
		<td><input type="reset" name="reset" value="Reset"></td>
	    	<tr><td>&nbsp;</td><td><a href="contnou.php" target="main">Utilizator nou</a></td></tr>	
	    </table>    
   
	<?
    
        if(isset($_POST['autentificare']) )
	{
	    //afiseaza mesaj de eroare
		echo "Eroare la autentificare!";
	}
    ?> 
	    
    
	</div>
	</form>
	</div>
	</body>
	</html>
