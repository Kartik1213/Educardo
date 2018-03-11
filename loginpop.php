<!--Login Pop up-->	


<div  id="loginpop" class="lgn">  
  <form class="lgn-content animate" action="login.php" method="POST">
    <div  class="imgcontainer">
      <span onclick="document.getElementById('loginpop').style.display='none'" class="close " title="Close Login">&times;</span>
    </div>

    <div  class="container">
      <label><b>Username<span style="color:red">*</span></b></label>
      <input type="text" class="logininp" placeholder="Enter Username" name="uid" required>

      <label><b>Password<span style="color:red">*</span></b></label>
      <input type="password" class="logininp" placeholder="Enter Password" name="pass" required>
      <input name="rdr" value="<?php echo $_SERVER['PHP_SELF'];?>" style="display:none">
      <br>
      <button type="submit" class="lgnbtn btn loginbtn login" style="width:100%">Login</button>
    </div>

    <div  class="container" style="background-color:#f1f1f1">
      <div style="text-align:right; font-size:11px">
      	<a href="signup.php">Not registered?Sign Up</a>
      </div>
      <br>
      <button type="button" onclick="document.getElementById('loginpop').style.display='none'" class="btn redbtn">Cancel</button>
    </div>
  </form>
</div>

