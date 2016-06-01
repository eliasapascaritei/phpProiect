<?
session_start();
if(!isset($_GET["logout"]))
{
    if(isset($_SESSION["ok"]))
    {
	if($_SESSION["ok"]==1)
        {
	
	    echo "Bun venit  ".$_SESSION["nume"]."   ".$_SESSION["prenume"];
    	    echo "<br>";
    	    
    	    echo "<a href='start_client.php?logout=true'>Log out</a>";    
	}
	else
	{
	    echo "Nu aveti acces la aceasta pagina decat dupa autentificare!";
    	    echo "<br><a href='logclient.php'>Autentificare</a>";
	}
	
    }
    else
    {
	echo "Nu aveti acces la aceasta pagina decat dupa autentificare!";
        echo "<br><a href='logclient.php'>Autentificare</a>";
    }
}
else
{
    session_destroy();
    header("location:logclient.php");
}


?>

