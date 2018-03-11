<!octype html>
<html>
	<head>
		<style>
			#header{height:80px}
			#main1{width:15%;background-color:white}
			#main2{width:70%;background-color:white}
			#main3{width:15%;background-color:white}
			.main{background-color:rgba(0,0,0,0.8);color:white;height:80px;font-weight:bold;padding:20px;font-size:20px}
			.profile{border-collapse:collapse;background-color:rgba(0,0,0,0,0.8);vertical-align:top;}
			#width{width:100%;height:750px}
			#main4{background-color:grey);font-weight:bold;height:80px;font-size:20px;color:white}
		</style>
		<link rel="SHORTCUT ICON" href="Educardo.png">

		<title>Profile|Educardo:Paving you way in Competitive Programming</title>
	
		<link href="style.css" rel="stylesheet">
		<link href="login.css" rel="stylesheet">

	</head>
	<body>
		<?php include "header.php";?>
		<?php include "toolbar.php";?>
		<?php
			if(!isset($output))
				header("location: /");
		
		?>
		<table id="width" class="profile">
			<tr>
				<td colspan="3" id="header"><h4 style="font-family:Courier;color:#4dc3ff"><b><font size="+4">Profile Details:</font></b></h4>
				</td>
			</tr>
			
			<tr>
				<td rowspan=5 id="main1">
				

				</td>
				<td class="main" style="border-radius:25px;text-align:center">
							<h2>
							<?php echo $output['uid'];?>
							</h2>
				</td>
				<td rowspan=5 id="main3">
				</td>
			</tr>
			<tr>
			
				<td class="main">
						<br>
					Profile No.<?php echo $output['id'];?>
						<br>
				</td>
			
			</tr>
			<tr>
				<td class="main">
						<br>					
					College Name:<?php echo $output['college_name'];?></td>
						<br>
			</tr>
			<tr>
				<td class="main">
						<br>
					No. of Questions attempted :<?php echo $output['no_of_q'];?>
						<br>
				</td>
			</tr>
			<tr>
				<td class="main">
					<table id="main4" class="profile">
						<tr>
							<td style="border-radius:25px;vertical-align:center;">
									
								Hobbies:
							</td>		
							<td style="vertical-align:center;">
								<?php if(isset($output['hobbies']))echo $output['hobbies'];else echo "-";?>
							</td>
						</tr>	
					</table>
				<td>	
			</tr>
			<tr>
				<td colspan="3" id="header">
			</tr>
		</table>
			
	
	
		<?php include "footer.php";?>
		<?php include "loginpop.php"; ?>

	</body>
</html>
