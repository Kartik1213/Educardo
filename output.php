<?php
	echo isset($_COOKIE['educardo_id']);
	if(isset($_COOKIE['educardo_id']))
		echo "<br>".$_COOKIE['educardo_id'];
	else
		setcookie("educardo_id",1,time()+86400*30);	
?>
