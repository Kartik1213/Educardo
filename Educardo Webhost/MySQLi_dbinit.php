<!DOCTYPE html>
<html>
	<title>PHP dbinit</title>
</html>
<body>
	<?php
		$servername = "localhost";
		$username = "id3535180_root";
		$password = "educardo@iiits";
		$dbname="id3535180_users";
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
			// Create database
		$sql = "CREATE DATABASE ".$dbname;
		if ($conn->query($sql) === TRUE) {
			echo "<script>console.log('Database created successfully');</script>";
			
			$sql="use users";
			if($conn->query($sql))
			{
				echo "<script>console.log('Database changed');</script>";				


				$sql="CREATE TABLE creds(
				id INT(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
				uid varchar(50) NOT NULL UNIQUE,
				pass varchar(50) NOT NULL,
				college_name varchar(100) ,
				no_of_q INT DEFAULT 0 ,
				hobbies varchar(255)
				);";
				if($conn->query($sql))
				{
					echo "<script>console.log('Table Created Successfully');</script>";
				}
				else
				{
					echo "<script>console.log('Failed to create table!!');</scipt>";
				    include "MySQLi_close.php";
				}
 

			}
			else
			{
				echo "<script>console.log('Database changing failed: ".$conn->error."');</script>";
			    include "MySQLi_close.php";
			}


			
		} 
		else 
		{
		    echo "<script>console.log('Error creating database: " . $conn->error."');</script>";
		    include "MySQLi_close.php";
		}
	
		
	?> 
</body>
