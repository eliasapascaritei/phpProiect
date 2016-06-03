<style>
body {
	background-image: url("travel.jpg")
}
</style>
<?php
ob_start();
require('interog.inc');
if( isset($_POST['autentificare']) )
{
$query="SELECT * FROM admin_elias_pr WHERE usr = '".$_POST["utilizator"]."' and parola='".$_POST["parola"]."'";
  if(($nr=InterogareSQL($query,$mat))!=0)
    {
	//crearea unei sesiuni
	session_start();
	$row=CitesteLinie($mat,0);
	
	//setarea variabilei de sesiune
	$_SESSION["ok"] = 5;
	$_SESSION["utilizator"]=$_POST["utilizator"];
	$_SESSION["nume"]=$row["nume"];
	$_SESSION["prenume"]=$row["prenume"];
	
	//redirectarea catre alta pagina
	header("location:start_admin.php"); 
    }
	else
	{
	header("location:logadmin.php");
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
	<form method="post" name="f" action="logadmin.php">
	 <div align=center> 
	    <table>
	    <tr>
		<td>Utilizator:</td>
		<td><input type="text" name="utilizator"></td>
	    </tr>
	    <tr>
		<td>Parola:</td>
		<td><input type="password" name="parola"></td>
	    </tr>
	    <tr>
		<td><input type="submit" name="autentificare" value="Autentificare" onClick="return valideaza()"></td>
		<td><input type="reset" name="reset" value="Reset"></td>
	    	
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
