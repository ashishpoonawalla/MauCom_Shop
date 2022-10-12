<?php

//define('DB_SERVER', 'localhost');
//('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_DATABASE', 'imagetest');
//$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

include ('dbconfig.php');

session_start();
$session_id='1'; //$session id
$path = "uploads/";
$ext ="";
$vimg = $_GET["vimg"];

//$pid = $_GET["pid"];
function getExtension($str) 
{

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

	$valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg2']['name'];
			$size = $_FILES['photoimg2']['size'];
			
			if(strlen($name))
				{
					 $ext = getExtension($name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = "../../a/".$_SESSION["mobile"]."/image/".$vimg.".".$ext;
							$actual_image_name1 = "a/".$_SESSION["mobile"]."/image/".$vimg.".".$ext;
							//$actual_image_name = time().substr(str_replace(" ", "_", $name), 5).".".$ext;
							$tmp = $_FILES['photoimg2']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								  
                  mysqli_query($db,"UPDATE zz".$_SESSION["mobile"]."products SET image2='$actual_image_name1' where productid=".$_SESSION["pid"]);
									
									echo "<img src='uploads/".$actual_image_name."'  class='preview2' height='120px'>";
								}
							else
								echo "Fail upload folder with read access.";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>