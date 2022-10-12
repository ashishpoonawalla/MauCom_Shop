<?php
	require_once "http.php";
	require_once "validator.php";
	

	
		require_once "DBConnect.php";
		
		$query="SELECT * FROM newspost ORDER BY postID Desc";
    
		$result=mysqli_query($db, $query) ;
    
    $cnt=0;
  
    while($row=mysqli_fetch_assoc($result))
		{
        $cnt++;
    
 
			$postID = $row["postID"];
      $username = $row["username"];
      $news = $row["news"];
      $dt = $row["date"];
      $userimage = $row["userimage"];
      $name = $row["name"];
      $walllink = $row["walllink"];
      $comments = $row["comments"];
      $likecount = $row["likecount"];
      
      
      ?>



            <!-- Main News Post  -->


                  <div class="media">
                    <a href="./Wall.php?un=<?php echo $username; ?>" class="pull-left">
                      <img src="<?php echo $userimage; ?>" width="64px" class="media-object" alt="">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <?php echo "<b>$name</b> post at - $dt"; ?>                        
                      </h4>
                      <?php echo $news; ?>






                      <!-- Comments Start here  -->

                            <?php 
                            $query1="SELECT * FROM newscomment Where postID=$postID ORDER BY commentID Desc ";

                            $result1=mysqli_query($db, $query1) ;

                            while($row1=mysqli_fetch_assoc($result1))
                            {
                     
                                $username1 = $row1["username"];                      $comment1 = $row1["newscomment"];
                                $dt1 = $row1["date"];                                $userimage1 = $row1["userimage"];
                         
                            ?>

                            <div class="media">
                              <a href="./Wall.php?un=<?php echo $username1; ?>" class="pull-left">
                                <img src="<?php echo $userimage1; ?>" width="40px" class="media-object" alt="">
                              </a>
                              <div class="media-body">
                                <?php echo $comment1; ?>
                                <br/><h5 class="label label-default">
                                  <?php echo "Comment at - $dt1"; ?>
                                </h5>
                              </div>
                            </div>
                      
                      
                            <?php
                      
                            }
                      
                      
                            ?>
                      
                      <!-- Comments End here  -->







                    </div>
                  </div>







                  <a id="modal-106176" href="#modal-container-106176<?php echo $postID; ?>" role="button" class="btn" data-toggle="modal">Comment</a> | Like <?php echo $postID; ?>


                  <div class="modal fade" id="modal-container-106176<?php echo $postID; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">
                            My Comment
                          </h4>
                        </div>

                        <div class="modal-body">
                        
                            <form id="commentForm" name="commentForm" method="post" action="./includes/PostListPost_Code.php" onsubmit="return checkCommentForm();">

                              <input type="hidden" id="postid2"  name="postid2" value="<?php echo $postID; ?>"></input>

                              <div class="form-group">
                              
                                <input type="text" class="form-control" id="comment2" name="comment2"></input>


                              </div>


                            <button type="submit" class="btn btn-primary">Make Comment</button>

                          </form>
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>







<?php
      }


if ($cnt < 2)
{
  echo "No Posts";
}

    

?>
