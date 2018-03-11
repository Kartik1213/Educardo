
<!DOCTYPE html>

<html>
	<head>
		<link rel="SHORTCUT ICON" href="Educardo.png">

		<title>Sign Up|Educardo:Paving you way in Competitive Programming</title>
	
		<link href="style.css" rel="stylesheet">
		<link href="login.css" rel="stylesheet">
		<style>
			input[type=text],input[type=password],input[type=email]{
				width:60%;
			}
			/*table, td, tr, th {border:1px solid white;}*/
		</style>
	</head>
	
	<body style="font-family: Arial, Helvetica, sans-serif;">

	<?php include "header.php"; ?>
	<?php
		if(isset($output))
			header("location: /");
	
	?>


<br>
<br>
<div class="divcol" style="color:white">
	<form method="POST">
		<table style="padding:20px;width:100%">
		
			<tr>
				<th rowspan=14 width=50% style="text-align:center; font-weight:400">
					<div style="font-size:70px">Sign Up:</div>
					<div style="font-family:Ariel">
						<br>
						Sign Up to the largest 
						<br>
						learning and competition 
						<br>
						community for programmers.
					</div>
				</th>
				<td>
					Username<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" type="text" required placeholder="Name" name="name" pattern="[A-Za-z0-9]{1,50}">
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Password<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" required placeholder="Password" id="pass1" type="password" min=8 pattern=[^'][^"]{7,} name="password">
					<span style="color:red; font-size:12px" id="i1" >
							<br>
							<img src="signup-error.png" style="width:25px"/>Password should be greater than 8 characters.
					</span>
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Confirm Password<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" required placeholder="Confirm Password" id="pass2" type="password" name="passwordconf">
					<span style="color:red;font-size:12px" id="i2">
							<br>
							<img src="signup-error.png" style="width:25px"/>Passwords don't match.
					</span>
				</td>
				
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					College Name:
				</td>
				<td>
					<input class="signupinput" placeholder="College Name" name="college_name" type="text">
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Hobbies:
				</td>
				<td>
					<textarea style="resize:none" placeholder="Hobbies" name="hobbies" rows=5 cols=35></textarea>
				</td>
			</tr>	
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" onclick="checklength();" class="lgnbtn btn loginbtn login" >Signup</button>
				</td>
				<td>
					&nbsp;
				</td>
			</tr>	
			<tr >
				<td class="but" style="font-size:11px; color:blue;	" onclick="document.getElementById('loginpop').style.display='block'">
					Already have account? Log in
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
		</table>
	</form>
</div>
	
	
	<?php include "footer.php";?>
	<?php include "loginpop.php"; ?>
	<?php
	
		if($_POST['name'])
		{
			include "MySQLi_connect.php";
			if($_POST['password']!=$_POST['passwordconf'])
			{
				echo "<script>alert('Both Passwords must be same!');</script>";
			}
			else
			{
				$sql="SELECT * from creds where uid='".$_POST['name']."';";
				$result=$conn->query($sql);
				if($result->num_rows==0)
				{
					$sql="INSERT into creds (uid,pass) values ('".$_POST['name']."','".$_POST['password']."');";
					$conn->query($sql);
					if(isset($_POST['college_name']))
					{
						$sql="UPDATE creds SET college_name='".$_POST['college_name']."'where uid='".$_POST['name']."';";
					}
					$conn->query($sql);
					if(isset($_POST['hobbies']))
					{
						$sql="UPDATE creds SET hobbies='".$_POST['hobbies']."' where uid='".$_POST['name']."';";					
					}
					if(!$conn->query($sql))
						echo "<script>console.log('Problem occured! ".$conn->error."');</script>";
					$sql="INSERT into qsolved (E1) values (0);";
					if(!$conn->query($sql))
						echo "<script>alert('Failed to create user!".$conn->error."');</script>";
					else
						echo "<script>alert('Username created successfully!!');</script>";	
				}
				else
				{
					echo "<script>alert('Username already exists!!');</script>";
				}
				
			}
		}
	?>
	<script type="text/javascript">
		function checklength(){
			var pss = document.getElementById('pass1').value;
			var com = document.getElementById('pass2').value;
			if (pss.length >=8||pss.length==0) {
				document.getElementById('i1').style.display="none";
				
			}
			else{
				document.getElementById('i1').style.display="inline";
				return 0;
			}
			if ( pss==com||com.length==0) {
				document.getElementById('i2').style.display="none";
			}
			else{
				document.getElementById('i2').style.display="inline";
				return 0;
			}
			return 1;
		}
		window.setInterval(checklength,10);
	</script>
	</body>
</html>
