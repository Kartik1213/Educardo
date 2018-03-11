<?php
	$servername = "localhost";
	$username = "id3535180_root";
	$password = "educardo@iiits";
	$dbname="id3535180_users";
	

	$check_conn=0;

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);


	// Check connection
	if ($conn->connect_error)
	{
	    $conn = new mysqli($servername, $username, $password);
    	if($conn->connect_error)
		    die("Connection failed: " . $conn->connect_error);
		else
		{
			require "MySQLi_dbinit.php";
		}
	}
	else
	{
		echo "<script>console.log('Connected successfully');</script>";
		$check_conn=1;
	}

	
	
	if($check_conn==1)
	{
		$sql="use users";
		if($conn->query($sql))
		{
			echo "<script>console.log('Database changed');</script>";
			
				
			
		}
		else
			die("Database changing failed: ".$conn->error);
	}


//	if($check_conn==1)
//		include "MySQLi_close.php";

?> 
