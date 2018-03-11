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
			
		</style>
	</head>
	
	<body style="font-family: Arial, Helvetica, sans-serif;">

	<?php include "header.php"; ?>


<br>
<br>
<div class="divcol" style="color:white">
	<form action="signup.html" method="POST">
		<table style="padding:20px;width:100%">
		
			<tr>
				<th rowspan=12 width=50% style="text-align:center; font-weight:400">
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
					Name<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" type="text" required placeholder="Name" name="name">
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Email<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" required placeholder="Email-ID" type="email" name="email">
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Password<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" required placeholder="Password" type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Confirm Password<span style="color:red">*</span>:
				</td>
				<td>
					<input class="signupinput" required placeholder="Confirm Password" type="password" name="passwordconf">
					<span style="color:red; font-size:12px">
							<br>
							<img src="signup-error.png" style="width:25px"/>Passwords don't match.
					</span>
				</td>
				
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					Hobbies:
				</td>
				<td>
					<textarea style="resize:none" placeholder="Hobbies" rows=5 cols=35></textarea>
				</td>
			</tr>	
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="lgnbtn btn loginbtn login">Signup</button>
				</td>
			</tr>	
			<tr >
				<td class="but" style="font-size:11px; color:blue;	" onclick="document.getElementById('loginpop').style.display='block'">
					Already have account? Log in
				</td>
			</tr>
		</table>
	</form>
</div>

	<?php include "footer.php";?>
	<?php include "loginpop.php"; ?>
	</body>
</html>
