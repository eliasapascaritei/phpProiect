<style>
body {
	background-image: url("travel.jpg")
}
</style>
<?
 
session_start();
 if(isset($_SESSION["ok"]))
    {
	if($_SESSION["ok"]==1)echo"Trebuie sa fiti logat ca si Administrator pentru a avea acces !";
	if($_SESSION["ok"]==5)
	{?>
	
	<html>
<head><title>Adauga oferta</title></head>
<body>
<?
require('interog.inc');
//$comanda="insert into oferta_elias_pr(destinatia,nr_zile,nr_locuri,transport,data1,data2,hotel1,hotel2) values('".$_POST["destinatia"]."',".$_POST["zile"].",".$_POST["locuri"].",'".$_POST["transport"]."',to_date('".$_POST["data"]."','YYYY-MM-DD'),to_date('".$_POST["data"]."','YYYY-MM-DD')+ integer '".$_POST['zile']."','".$_POST['hotel1']."','".$_POST['hotel2']."');";
//InterogareSQL($comanda,$mat);
//$comanda1="select * from oferta_elias_pr where destinatia='".$_POST['destinatia']."' and data1=to_date('".$_POST["data"]."','YYYY-MM-DD');";
//InterogareSQL($comanda1,$mat1);
//$linie=CitesteLinie($mat1,0);
//$cod=$linie['cod_oferta'];
//$comanda2="insert into pret_elias_pr values ($cod,".$_POST['pret1'].",".$_POST['pret2'].");";
//InterogareSQL($comanda2,$rezulat);
//
$comanda="select * from add_oferta_elias_pr('".$_POST["destinatia"]."',".$_POST["zile"].",".$_POST["locuri"].",'".$_POST["transport"]."',to_date('".$_POST["data"]."','YYYY-MM-DD'),to_date('".$_POST["data"]."','YYYY-MM-DD')+ integer '".$_POST['zile']."','".$_POST['hotel1']."','".$_POST['hotel2']."','".$_POST['pret1']."','".$_POST['pret2']."');";
InterogareSQL($comanda,$mat);
echo "Oferta introdusa in baza de date!";
}
}
else
echo "Administrator nelogat!";
?>
</body>
</html>