<?php
	include "header.php";
	if(!isset($_COOKIE['educardo_id']))
	{
		echo "<script>alert('You need to sign in first...');</script>";
		echo "<script>window.location='http://".$_SERVER['HTTP_HOST']."/problems.php';</script>";		
		
	}
	else if(!isset($_POST['pdone']))
	{
		header("location: /");
	}
	else
	{
//		echo $_POST['pdone'];
		$q=$_POST['pdone'];
//		echo $q;
		
		$sql="select * from qsolved where id=".$_COOKIE['educardo_id'].";";
		$out=$conn->query($sql);
		if(!$out)
			die("Failed to get data from table qsolved. ".$conn->error);
		$update=$out->fetch_assoc();
		
		echo $update[ $q ];
		
		if($update[ $_POST['pdone'] ]==1)
		{
			echo "<script>alert('Already marked as done');</script>";
			echo "<script>window.location='http://".$_SERVER['HTTP_HOST']."/problems.php';</script>";

		}
		else
		{
			$sql="UPDATE qsolved set ".$_POST['pdone']."=1 where id=".$_COOKIE['educardo_id'].";";
			if($conn->query($sql))
			{
				echo "<script>alert('Marked as done');</script>";
				echo "<script>window.location='http://".$_SERVER['HTTP_HOST']."/problems.php';</script>";
				$sql="select no_of_q from creds where id=".$_COOKIE['educardo_id'].";";
				$out=$conn->query($sql);
				$update=$out->fetch_assoc();
				$newq=$update['no_of_q']+1;
				$sql="UPDATE creds set no_of_q=".$newq." where id=".$_COOKIE['educardo_id'].";";
				$conn->query($sql);		
			}
			else
				echo "Problem occured. ".$conn->error;
		}
	}
	include "footer.php";
?>
