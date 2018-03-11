<?php
if( isset($_COOKIE["educardo_id"]) )
	session_start();

?>
<!DOCTYPE html>

<html>
	<head>
		<title>Log In</title>
	</head>
	<body>
		<?php include "header.php";?>

		<?php
			/*** loginpop.php
			* A simple login module.***/

			// enable sessions
			if( isset($_COOKIE["educardo_id"]) )
			{
				echo "Already logged in";
				if(isset($_POST['rdr'])&&$_POST['rdr']!="/index.php")
					header("location: ".$_POST['rdr']);
				else
					header("location: /");					
				exit ;
			}
			
			
			
			
			if (isset($_POST["uid"]) && isset($_POST["pass"]))
			{
    
				include "MySQLi_connect.php";
    
				$sql="select * from creds where uid=(select lower('".$_POST['uid']."') from dual) ;";
				$result=$conn->query($sql);
				
				if($result)
				{
					if($result->num_rows!=1)
					{
						echo '<script>alert("Wrong username");</script>';
	
	
					}
					else
					{
						$output=$result->fetch_assoc();
						$user=$output['uid'];
						$password=$output['pass'];
							
						if ( $_POST["pass"] == $password)
						{
							// remember that user's logged in
							$_SESSION["authenticated"] = 'true';
							setcookie("educardo_id",$output['id'],time()+86400*30);
							//cookie by the name of id =$output['id'];
							if(isset($_POST['rdr'])&&$_POST['rdr']!="/index.php")
								header("Location: ".$_POST['rdr']);
							else
								header("Location: /");					
							
						}
						else
						{
							echo '<script>alert("Wrong Login credentials");</script>';
						}
					}
					if(isset($_POST['rdr'])&&$_POST['rdr']!="/index.php")
						echo "<script>window.location='http://".$_SERVER['HTTP_HOST']."/".$_POST['rdr']."';</script>";
					else
						echo "<script>window.location='http://".$_SERVER['HTTP_HOST']."';</script>";
				}
				else
				{
					die("MySQL reported error".$conn->error);
				}
			}
			else
			{
				if(isset($_POST['rdr'])&&$_POST['rdr']!="/index.php")
					header("Location: ".$_POST['rdr']);
				else
					header("Location: /");					
			}
			include "MySQLi_close.php";
		?>
		<?php include "footer.php";?>
		<?php include "loginpop.php"; ?>

	</body>
</html>
