<?php
require('interog.inc'); 
		?>
<html>
<head>
<title>insereaza date in clienti</title>
</head>

<body>
<?php
//$sir="insert into client_elias_pr values('".$_POST["cnp"]."','".$_POST["nume"]."','".$_POST["prenume"]."','".$_POST["adresa"]."','".$_POST["telefon"]."','".$_POST["email"]."');";
$sir="select * from add_client_elias_pr('".$_POST["cnp"]."','".$_POST["nume"]."','".$_POST["prenume"]."','".$_POST["adresa"]."','".$_POST["telefon"]."','".$_POST["email"]."');";
InterogareSQL($sir,$rez);
echo "Contul a fost creat!";
?>
</body>
</html>
