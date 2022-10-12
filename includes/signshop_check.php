<?php
	require_once "http.php";
	require_once "validator.php";
	
 
  
	//if(checkRegister())
  //{
  
  session_start();
		$username=$_SESSION["user"];
  
    $mobile1=$_REQUEST["mobile1"];
	 	//$shopname=$_REQUEST["shopname"];
    //$city1=$_REQUEST["city1"];
    //$address1=$_REQUEST["address1"];
    //$Pin=$_REQUEST["Pin1"];
    
    $imgfile = "img_profile/".$username."logo.JPG";
    $shoplogo1=$imgfile;
    
         
	// ------------- Check here Mobile number is not exists -----------------
    
    
    if ($mobile1 == null ) // || $shopname == null || $city1 == null)
    {
    
        redirect("../signshop.php?registerError=true");
    }
    else
    {
    
		    require_once "DBConnect.php";
		    
        
		   // $query="Update user1 SET mobileno='".$mobile1."', shopname='".$shopname."', city='".$city1."',address1='".$address1."',pinorzip='".$Pin."',shoplogo='".$imgfile."' where username='".$username."' ";
		    $query="Update user1 SET mobileno='".$mobile1."', mobileverify='YES',shoplogo='".$imgfile."' where username='".$username."' ";
		
		    $result=mysqli_query($db, $query) ;
		    //echo "RESULT: ".$result;
		
		if($result!=1)
        {
			    //echo "RESULT1: ".$result;
			    redirect("../signshop.php?registerError=true");
		}
        else
        {
		 	    //echo "RESULT2: ".$result;
			   
        // session_start();
			  // $_SESSION["user"]=$username;
        // $_SESSION["pass"]=$password;
        // $_SESSION["name1"]=$row["name"];
        // $_SESSION["image1"]=$row["profileimage"];
         
			    $_SESSION["mobile"]=$mobile1;
          //$_SESSION["shopname"]=$shopname;
         
          copy("../img_profile/shoplogo1.png","../".$imgfile);
          
          $_SESSION["imageshop1"]=$imgfile;
          
         
         
        // ---------------- code to create dir and file structure --------------
        
        $userdir = "../a/".$mobile1."/";
		$userimagedir = "../a/".$mobile1."/image/";
		    if (!is_dir($userdir))
		    {
        
        
        //   <?php    header('Location: mypage.php'); 


          mkdir($userdir,0777);
		  mkdir($userimagedir,0777);
          //  copy("../11111111shop/index.php","../a/".$mobile1."/index.php");


          $myfile = fopen("../a/".$mobile1."/index.php", "w") or die("Unable to open file!");
          $txt = "<?php header('Location: ../../store/shop.php?var1=".$mobile1."');   ?>";
          fwrite($myfile, $txt);
          //$txt = "Jane Doe\n";
          //fwrite($myfile, $txt);
          fclose($myfile);

          echo "Your directory was created. This is where all your files will be stored.<br>";
            
            
            require_once "DBConnect.php";
		       

			// ----------------------- Category
           
              $query1="CREATE TABLE zz".$mobile1."category SELECT * FROM tblcategory";
		        $result1=mysqli_query($db, $query1) ;

			//	ALTER TABLE `zz9800010001category` ADD PRIMARY KEY (`categoryID`);

			$query1="ALTER TABLE zz".$mobile1."category ADD PRIMARY KEY (categoryID)";
		        $result1=mysqli_query($db, $query1) ;
		   


		   // ----------------------- Banner
		   
              $query1="CREATE TABLE zz".$mobile1."banner SELECT * FROM tblbanner";
		        $result1=mysqli_query($db, $query1) ;

			// ALTER TABLE `zz9800010001banner` CHANGE COLUMN `bannerid` `bannerid` INT(11) NOT NULL AUTO_INCREMENT ,ADD PRIMARY KEY (`bannerid`);

			$query1="ALTER TABLE zz".$mobile1."banner CHANGE COLUMN bannerid bannerid INT(11) NOT NULL AUTO_INCREMENT ,ADD PRIMARY KEY (bannerid)";
		        $result1=mysqli_query($db, $query1) ;
		   

		   // ----------------------- Product

              $query1="CREATE TABLE zz".$mobile1."products SELECT * FROM tblproducts";
		        $result1=mysqli_query($db, $query1) ;
		  

			//  ALTER TABLE `zz9800010001products` CHANGE COLUMN `productid` `productid` INT(11) NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (`productid`);

			$query1="ALTER TABLE zz".$mobile1."products CHANGE COLUMN productid productid INT(11) NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (productid)";
		        $result1=mysqli_query($db, $query1) ;
		   

		// ----------------------- Brand

              $query1="CREATE TABLE zz".$mobile1."brand SELECT * FROM tblbrand";
		        $result1=mysqli_query($db, $query1) ;
		  

			//  ALTER TABLE `zz9800010001brand` CHANGE COLUMN `productid` `productid` INT(11) NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (`productid`);

			$query1="ALTER TABLE zz".$mobile1."brand ADD PRIMARY KEY (brandid)";
		        $result1=mysqli_query($db, $query1) ;


		// ----------------------- Order

              $query1="CREATE TABLE zz".$mobile1."order SELECT * FROM tblorder";
		        $result1=mysqli_query($db, $query1) ;
		
			//$query1="ALTER TABLE zz".$mobile1."order ADD PRIMARY KEY (orderid)";
			  $query1="ALTER TABLE zz".$mobile1."order CHANGE COLUMN orderid orderid INT(11) NOT NULL AUTO_INCREMENT ,ADD PRIMARY KEY (orderid)";
		   
		        $result1=mysqli_query($db, $query1) ;



		// ----------------------- Order_Detail

              $query1="CREATE TABLE zz".$mobile1."order_detail SELECT * FROM tblorder_detail";
		        $result1=mysqli_query($db, $query1) ;
		
			//$query1="ALTER TABLE zz".$mobile1."order_detail ADD PRIMARY KEY (id)";
			  $query1="ALTER TABLE zz".$mobile1."order_detail CHANGE COLUMN id id INT(11) NOT NULL AUTO_INCREMENT ,ADD PRIMARY KEY (id)";
		   
		        $result1=mysqli_query($db, $query1) ;

		// ----------------------- Mail

              $query1="CREATE TABLE zz".$mobile1."mail SELECT * FROM tblmail";
		        $result1=mysqli_query($db, $query1) ;
		
			//$query1="ALTER TABLE zz".$mobile1."mail ADD PRIMARY KEY (mailid)";
			  $query1="ALTER TABLE zz".$mobile1."mail CHANGE COLUMN mailid mailid INT(11) NOT NULL AUTO_INCREMENT ,ADD PRIMARY KEY (mailid)";
		   
		        $result1=mysqli_query($db, $query1) ;



		}
        else
        {
        echo "alraeady created or not exists....";
        
        }
       
			    redirect("../shopprofile.php");
	}
 }
	//}
  //else
  //{
	 //	echo "Error RESULT3: ";
		////redirect("../Signup.php?registerError=true");
	//}
  
?>