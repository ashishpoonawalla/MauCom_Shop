<div id="profilename" class="wrapper">

  <?php
	
			session_start();
			//$_SESSION["user"]=$username;
      $name = $_SESSION["name1"];
      //$_SESSION["image1"]=$row["profileimage"];
         
		
								if(isset($_REQUEST["nameError"])){
									?>

                   <div class="alert alert-warning alert-dismissable">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     <h4>
                       Alert!
                     </h4> <strong>Warning!</strong> No data updated  <a href="#" class="alert-link"></a>
                   </div>

                   <?php
                   unset($_REQUEST["nameError"]);
								}
							
	
?>
  
  <form id="profilenameForm" name="profilenameForm" method="post" action="./includes/Profile_NameCode.php" onsubmit="return checkProfileForm();">



    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="name1" name="name1" value="<?php echo $name; ?>" onkeypress="unsetnameError(false);" />

    </div>


   <button type="submit" class="btn btn-primary">Change Name</button>

 
    <br />


    
      
   

  </form>


 
</div>