<?php
	include "MySQLi_connect.php";
	if(!isset($_COOKIE['educardo_id']))
		include "MySQLi_close";
	else
	{
		$sql="select * from creds where id='".$_COOKIE['educardo_id']."';";
		$result=$conn->query($sql);
	
		if($result)
		{
			if($result->num_rows!=1)
			{
				echo '<script>alert("Wrong user\nLogging out...");</script>';
				header("location: logout.php");

			}
			else
			{
				$output=$result->fetch_assoc();
			}
		}
		else
		{
			die("MySQL reported error".$conn->error);
		}

	}
	
?>
