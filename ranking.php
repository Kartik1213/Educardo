<!DOCTYPE html>
<html>
<head>
	<link rel="SHORTCUT ICON" href="Educardo.png">

	<title>Educardo:Paving you way in Competitive Programming</title>
	<link href="login.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<style>
		.ranks{
			text-align: center;
			border:1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">

<?php 
	include "header.php";
	include "toolbar.php";
	
	$sql = "SELECT uid, no_of_q FROM creds ORDER BY no_of_q DESC;";
	$res = $conn->query($sql);
	if ($res->num_rows > 0) {
		echo "<br><center><table class='ranks'><tr><th width=40% class='ranks'>Name</th><th width=40% class='ranks'>no of Ques. Solved</th></tr>";
    	while($row = $res->fetch_assoc()) {
        	echo "<tr><td class='ranks'>". $row["uid"]."</td><td class='ranks'>".$row["no_of_q"]."</td></tr>";
    	}
    	echo "</table></center>";
    }
    include "footer.php";
    include "loginpop.php";
?>
	
</body>
</html>

