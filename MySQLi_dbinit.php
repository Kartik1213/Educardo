<!DOCTYPE html>
<html>
	<title>PHP dbinit</title>
</html>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname="users";
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
					echo "<script>console.log('Table created successfully');</script>";
					$sql="CREATE TABLE qsolved(
					id INT(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
					E1 int default 0,
					E2 int default 0,
					E3 int default 0,
					E4 int default 0,
					M1 int default 0,
					M2 int default 0,
					M3 int default 0,
					M4 int default 0,
					H1 int default 0,
					H2 int default 0,
					H3 int default 0,
					H4 int default 0,
					P1 int default 0,
					P2 int default 0,
					P3 int default 0,
					P4 int default 0
					);";
					if(!$conn->query($sql))
						echo "<script>console.log('Failed to create second table');</script>";
				}
				else
				{
					echo "Failed to create table!!";
				    include "MySQLi_close.php";
				}
			}
			else
			{
				echo "Database changing failed: ".$conn->error;
			    include "MySQLi_close.php";
			}


			
		} 
		else 
		{
		    echo "Error creating database: " . $conn->error;
		    include "MySQLi_close.php";
		}
	
	?> 
</body>
