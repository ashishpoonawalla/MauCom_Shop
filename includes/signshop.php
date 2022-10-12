<div id="register" class="wrapper">
	
  <form id="registerForm" name="registerForm" method="post" action="./includes/signshop_check.php" onsubmit="return checkRegisterForm();">

    <label id="error" style="color: red;">
      <?php
								if(isset($_REQUEST["registerError"])){
									?>

      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
          Alert!
        </h4> <strong>Warning!</strong> Please give a proper mobile no. <a href="#" class="alert-link"></a>
      </div>

      <?php
                   unset($_REQUEST["registerError"]);
								}
							?>
    </label>



    <div class="form-group">
      <label for="exampleInputMobile1">Mobile *</label>
     <input type="text" class="form-control" id="mobile1" maxlength="10" name="mobile1" style="width: 100%;" onkeypress="unsetRegisterError(false);" />
    </div>

   
    <br />

    <button type="submit" class="btn btn-primary">Create Store</button>


  </form>
















 
</div>