<div id="register" class="wrapper">
	
  <form id="registerForm" name="registerForm" method="post" action="./includes/register_check.php" onsubmit="return checkRegisterForm();">



    <div class="form-group">
      <label for="exampleInputEmail1">Email / Username</label>
     <input type="email" class="form-control" id="username" name="username" style="width: 100%;" onkeypress="unsetRegisterError(false);" />
    </div>

 
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password" name="password" style="width: 100%;" onkeypress="unsetRegisterError(false);" />
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" class="form-control" id="name1" name="name1" onkeypress="unsetRegisterError(false);" />
    </div>
    
    
    <br />

    <button type="submit" class="btn btn-primary">Sign up</button>

    <br />

    <br />










    <label id="error" style="color: red;">
      <?php
								if(isset($_REQUEST["registerError"])){
									?>

      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
          Alert!
        </h4> <strong>Warning!</strong> Please give a proper Name Username Password <a href="#" class="alert-link"></a>
      </div>

      <?php
                   unset($_REQUEST["registerError"]);
								}
							?>
    </label>



  </form>


 
  <h4>
    <a href="index.php">Login now</a>
  </h4>
















 
</div>