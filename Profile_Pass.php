<div id="profilename" class="wrapper">

  <?php
	
			
			//$_SESSION["user"]=$username;
      $pass1=$_SESSION["pass"];
      //$_SESSION["image1"]=$row["profileimage"];
         
		
	
?>
  
  <form id="profilenameForm" name="profilenameForm" method="post" action="./includes/Profile_NameCode.php" onsubmit="return checkProfileForm();">



    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="password" class="form-control" id="pass1" name="pass1" value="<?php echo $pass1; ?>" onkeypress="unsetnameError(false);" />

    </div>


   <button type="submit" class="btn btn-primary">Change Password</button>

 
    <br />


    
  </form>


 
</div>