<style>
body {
	background-image: url("travel.jpg")
}
</style>
<?php
session_start();
if(isset($_SESSION["ok"]))
if($_SESSION["ok"]==1)
{
session_destroy();
    header("location:logclient.php");
	}
	else
	{
	session_destroy();
    header("location:logadmin.php");
	}
else
	echo "Nu este nimeni logat!";
	?>