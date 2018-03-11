<?php
if( isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['mess']) )
{ $name=$_POST['name'];
  $mail=$_POST['mail'];
  $mess=$_POST['mess'];
  
  $handle=fopen('contact.txt','a');

  fwrite($handle,"NAME \t\t".$name."\n");                      //appending name         compulsary
  fwrite($handle,"EMAIL \t\t".$mail."\n");                         //mail
  fwrite($handle,"MESSAGE \t\t".$mess."\n");                       //message    

  
  if( isset($_POST['ph']) )                                //appending phone no
  {$ph=$_POST['ph'];                                     
  fwrite($handle," PHONE NO \t\t".$ph."\n");}
  
  if( isset($_POST['add']) )                                 //appending address
  {$add=$_POST['add'];
  fwrite($handle," ADDRESS \t\t".$add."\n");}
  
  if( isset($_POST['sub']) )                                     //appending subject
  {$sub=$_POST['sub'];
  fwrite($handle,"SUBJECT \t\t".$ph."\n");}
  
  
  fwrite($handle,"\n\n");                         //giving space btw two users
  
  
  

}


?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="SHORTCUT ICON" href="Educardo.png">

		<title>Contact Us|Educardo:Paving you way in Competitive Programming</title>
	
		<link href="login.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

	</head>
	
	<body style="font-family: Arial, Helvetica, sans-serif;">
	
	
	
	
	<?php include "header.php"	; ?>
		<table id="f2" style="width:100%">
			<tr>
				<td width=50% rowspan=2>
					<div id="f3">
						<font size="+2"><h1>We Want to Hear From<br> You<br></h1></font>
						<h4>Room Number 007,008 and 010 <br>Boys Hostel 1 <br>IIIT Sri City Hostel<br><br><br></h4>
						<h4>info.educardo@gmail.com<br><br><br><br>
						9211-9211-91--92--93<br>
						0731-420-420-4
						</h4>
					</div>
				</td>
				<td>
					<div id="f1" >
						<form  method="POST">
							<input name="name" type="text" placeholder="Name *" class="continp" required size="60"><br><br>
							<input name="mail" type="email" class="continp" placeholder="Email *" required size="60"><br><br>
							<input name="ph" type="text" class="continp" placeholder="Phone" size="60" max="10"><br><br>
							<input name="add" type="text" class="continp" placeholder="Address" size="60"><br><br>
							<input name="sub" type="text" class="continp" placeholder="Subject" size="60"><br><br>
							<input name="mess" type="text" class="continp" style="height:90px" required placeholder="Message*" size="60"><br><br>
							<input type="submit" value="Send" style="height:40px;width:70px">
						</form>
					</div>
				</td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
		</table>




	<?php include "footer.php";?>
	<?php include "loginpop.php"; ?>
	
	

	</body>
</html>
