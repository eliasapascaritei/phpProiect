<style>
body {
	background-image: url("travel.jpg")
}
</style>
<?
session_start();
if(!isset($_GET["logout"]))
{
    if(isset($_SESSION["ok"]))
    {
	if($_SESSION["ok"]==5)
        {
	
	    echo "Bun venit  ".$_SESSION["nume"]."   ".$_SESSION["prenume"];
    	    echo "<br>";
    	    
    	    echo "<a href='start_admin.php?logout=true'>Log out</a>";    
	}
	else
	{
	    echo "Nu aveti acces la aceasta pagina decat dupa autentificare!";
    	    echo "<br><a href='logadmin.php'>Autentificare</a>";
	}
	
    }
    else
    {
	echo "Nu aveti acces la aceasta pagina decat dupa autentificare!";
        echo "<br><a href='logadmin.php'>Autentificare</a>";
    }
}
else
{
    session_destroy();
    header("location:logadmin.php");
}


?>

