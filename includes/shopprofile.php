<div id="register" class="wrapper">
	
  <form id="registerForm" name="registerForm" method="post" action="./includes/shopprofile_check.php" onsubmit="return checkRegisterForm();">

    <label id="error" style="color: red;">
      <?php
								if(isset($_REQUEST["registerError"])){
									?>

      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
          Alert!
        </h4> <strong>Warning!</strong> Please give a proper information. <a href="#" class="alert-link"></a>
      </div>

      <?php
                   unset($_REQUEST["registerError"]);
								}
							?>
    </label>

 
    <div class="form-group">
      <label for="exampleInputStoreName1">Shop Name *</label>
      <input type="text" class="form-control" id="shopname" name="shopname" style="width: 100%;" onkeypress="unsetRegisterError(false);" />
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">City *</label>
      <input type="text" class="form-control" id="city1" name="city1" onkeypress="unsetRegisterError(false);" />
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="text" class="form-control" id="address1" name="address1" onkeypress="unsetRegisterError(false);" />
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Zip or Pin</label>
      <input type="text" class="form-control" id="Pin1" name="Pin1" onkeypress="unsetRegisterError(false);" />
    </div>

   
    <br />

    <button type="submit" class="btn btn-primary">Update Store Info</button>


  </form>
















 
</div>