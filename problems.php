<!DOCTYPE html>
<html>
<head>
	<link rel="SHORTCUT ICON" href="Educardo.png">

	<title>Educardo:Paving you way in Competitive Programming</title>
	<link href="login.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
		<style>
			#m1 {background-color:#58A0F1}
			.c2 {background-color:#58A0F1;padding:16px;font-size:16px;cursor:pointer;border-left:none;border-top:none;border-right:0.5px solid white;}
			.c2:hover {background-color:#58A0F1;border-bottom:2px solid blue;}
			.c1 {position:relative;display:inline-block;}
			.c3 {display:none;position:absolute;background-color:#f9f9f9;min-width:160px;overflow:auto;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);z-index:1;display:none;}
			.c3 td {color:black;padding:40px 80px;text-decoration:none;width:25%;}
			.hv1 td:hover {background-color:#f1f1f1;}
			
			a {color:black;padding:50px 110px;text-decoration:none;width:25%;}
		
			.t1,.t1 .sel {border-collapse:collapse;}
			.t1 .sel {background-color:#E0DCDB; padding: 10px 10px;}
			.t1 .sel:hover {background-color:#D0CFCE;}
			.t1{ border-collapse:collapse;}
			.t1 .panehead {font-size:30px;font-weight:400;background-color:#E0DCDB; padding: 10px 10px;}
			.t1 .pane_shead {font-size:25px;font-weight:350;background-color:#E0DCDB; padding: 10px 10px;}
			.he1 {font-size:30px;font-weight:400;}
			
			.t2 {height:40%;}
			.he2,.hv2 {color:black;text-decoration:none;width:25%;}
			.c33 {display:none;position:absolute;background-color:#f9f9f9;min-width:160px;overflow:auto;box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);z-index:1;display:none;}
			.c33 td, th {color:black;padding:10px 40px;text-decoration:none;width:25%;}
			.hv2:hover {background-color:#f1f1f1;}
		</style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;" onload="document.getElementById('buttondone').disabled=1">

	<?php include "header.php"; ?>
	<!--inroduction background-->

	<table width=100% height=100%>
		<tr>
		<td style="width:20%">
		<table class="t1" style="width:100%" >
		
			<tr>
				<td class="panehead">Problems</td>
			</tr>
			
			<tr>
				<td class="pane_shead">Easy</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('E1');">Random pair</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('E2');">Fibonnaci</td>
			</tr>
			<tr>
				<td class="sel" onclick="set('E3');">Studying Alphabet</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('E4');">Coins and Triangle</td>
			</tr>
			<tr>
				<td class="pane_shead">Medium</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('M1');">Tree land</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('M2');">Time of collisions</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('M3');">Game count</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('M4');">Fusion weapons</td>
			</tr>
			<tr>
				<td class="pane_shead">Hard</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('H1');">Palindrome</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('H2');">Variations</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('H3');">Bookshelves</td>
			</tr>
			<tr>
				<td class="sel"  onclick="set('H4');">Bamboo</td>
			</tr>
			<tr>
				<td class="pane_shead">Pro</td>
			</tr>
			<tr>
				<td class="sel" onclick="set('P1');">Fence</td>
			</tr>
			<tr>
				<td class="sel" onclick="set('P2');">Trainig</td>
			</tr>
			<tr>
				<td class="sel" onclick="set('P3');">Wealth disparity</td>
			</tr>
			<tr>
				<td class="sel" onclick="set('P4');">Brackets</td>
			</tr>
		</table>
		</td>
		<td style="width:80%;vertical-align:top;">
		<span style="text-align:right">
		<form action="/problemdone.php" method="POST">
			<input name="pdone" type="text" id="textdone"   style="display:none;">
			<input type="submit" id="buttondone" value="Mark as done">
		</form>
		<span>
			<iframe id="ifrm" width=100% height=875px src="/Problems/intro.html"></iframe> 
		</td>
		</tr>
	</table>	

<script>

	function myFunction(dpdn)
	{
		if(document.getElementById(dpdn).style.display=='block')
			document.getElementById(dpdn).style.display='none';
		else
		{
			document.getElementById('d1').style.display='none';
			document.getElementById('d2').style.display='none';
			document.getElementById('d3').style.display='none';
			document.getElementById(dpdn).style.display='block';
		}
		
	}
	function set(ques)
	{
		document.getElementById('ifrm').src='/Problems/'+ques+'.html';
		document.getElementById('buttondone').disabled=0;
		document.getElementById('textdone').value=ques;
	}

</script>
		<?php include "footer.php";?>
		<?php include "loginpop.php"; ?>

</body>
</html>

