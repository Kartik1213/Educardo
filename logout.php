<!DOCTYPE html>

<html>
	<head>
		<title>Log out</title>
	</head>
	<body>
		<?php
			/*** logout.php
			* A simple login module.***/
			if(isset($_COOKIE["educardo_id"]))
			{
				setcookie("educardo_id",'',time()-3600);
				setcookie(session_name(),'',time()-3600);
				session_destroy();
			}
			header("Location: /");					
			
		?>

	</body>
</html>
