<div id="login" class="wrapper">

  <form id="loginForm" name="loginForm" method="post" action="./includes/PostNews_Code.php" onsubmit="return checkLoginForm();">




    <div class="form-group">
      <label for="exampleInputEmail1">What's on my mind</label>
      <input type="text" class="form-control" id="newspost" name="newspost" onkeypress="unsetPostError(false);" />

    </div>
    <button type="submit" class="btn btn-default">News Post</button> 


   




    
      <?php
								if(isset($_REQUEST["postError"])){
									?>

      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Warning!</strong> some error in post <a href="#" class="alert-link"></a>
      </div>
									
                  <?php
                  unset($_REQUEST["postError"]);
								}
							?>
   



  </form>

</div>