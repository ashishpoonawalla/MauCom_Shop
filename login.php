<div id="login" class="wrapper">

  <form id="loginForm" name="loginForm" method="post" action="./includes/login_check.php" onsubmit="return checkLoginForm();">



    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="username" name="username" onkeypress="unsetLoginError(false);" />

    </div>


    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password" name="password" onkeypress="unsetLoginError(false);" />

    </div>


    <br />

    <button type="submit" class="btn btn-primary">Login</button>

    <br />    <br />






    
      <?php
								if(isset($_REQUEST["loginError"])){
									?>

      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
          Alert!
        </h4> <strong>Warning!</strong> Invalid Username or password <a href="#" class="alert-link"></a>
      </div>
									
                  <?php
                  unset($_REQUEST["loginError"]);
								}
							?>
   



  </form>


  <h4>
    <a href="Signup.php">Sign up for new User</a>
  </h4>

</div>