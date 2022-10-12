<div id="profilename" class="wrapper">


  <?php
		    $imageprofile=  $_SESSION["image1"];
				$name=  $_SESSION["name1"];


   
			?>

  <img alt="140x140" width="320px" src="<?php echo $imageprofile; ?>">
  <h4>
    <?php echo $name; ?>
  </h4>


    
 
    <form action="./includes/Profile_ImgCode.php"  method="post" enctype="multipart/form-data">
    

    <div class="form-group">
      <label for="exampleInputEmail1">Image File</label>
      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >

    </div>


   <button type="submit" class="btn btn-primary">Change Image</button>

 
    <br />


    
  </form>


 
</div>