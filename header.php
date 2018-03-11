	<!--header portion-->

	<?php
			include "getuserdata.php";	
	?>
	<table id="top" width=100% height=170px>
		<tr height=58px>
			<td rowspan="2" width=13%></td>
			<td colspan="5" width=74% style="border-bottom: 1px solid rgba(24, 24, 24, 0.15);text-align: right;">
				<?php 
				if($_SERVER['PHP_SELF']!="/signup.php")
				{
					if(isset($_COOKIE['educardo_id']))
					{
						echo $output['uid']."&nbsp;&nbsp;";
						echo '<button class="btn sign" onclick="location.href='."'".'profile.php'."'".'">Profile</button>';
						echo '&nbsp;';
						echo '<button class="btn redbtn" onclick="location.href='."'".'logout.php'."'".'">Log out</button>';
					}
					else
					{
						echo '<button class="btn login" onclick="document.getElementById('."'loginpop'".').style.display='."'block'".'">Log In</button>';
						echo '&nbsp;';
						echo '<button class="btn sign" onclick="location.href='."'".'signup.php'."'".'">Sign Up</button>';

					}
				}
				else
						echo '<button class="btn orgbtn" onclick="location.href='."'".'/'."'".'">&lt;&lt;Home</button>';
				?>
			</td>
			<td rowspan="2"  width="13%"></td>
		</tr>
		<tr>
			<td width=50%><a href="/"><img src="logo.png" width=230px height=105px style="float:left"></a></td>
			<td>
				<span  <?php if($_SERVER['PHP_SELF']!="/"."index.php"){echo 'class="but"'.' onclick="location.href='."'/'".'"';} else echo 'class="but_curr"'; ?>>
					Home
				</span>
			</td>
			<td>
				<span  <?php if($_SERVER['PHP_SELF']!="/"."problems.php"){echo 'class="but"'.' onclick="location.href='."'/".'problems.php'."'".'"';} else echo 'class="but_curr"'; ?>>
					Problems
				</span>
			</td>
			<td>
				<span  <?php if($_SERVER['PHP_SELF']!="/"."about us.php"){echo 'class="but"'.' onclick="location.href='."'/".'about%20us.php'."'".'"';} else echo 'class="but_curr"'; ?>>
					About Us
				</span>
			</td>
			<td>
				<span  <?php if($_SERVER['PHP_SELF']!="/"."contact us.php"){echo 'class="but"'.' onclick="location.href='."'/".'contact%20us.php'."'".'"';} else echo 'class="but_curr"'; ?>>
					Contact Us
				</span>
			</td>
		</tr>
	</table>

