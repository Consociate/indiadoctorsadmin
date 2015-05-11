<?php 
	include_once 'src/controllers/hottopiccontroller.php';
	$hottopiclist = showHottopicPosts();
	if(count($hottopiclist)){
	$hottopic = $hottopiclist[0];
?>
<div class="span8">

                        <div class="box gradient">

                            <div class="title">

                                <h4>
                                    <span class="icon16 entypo-icon-thumbs-up"></span>
                                    <span>Monthly Hot Topic  - <?php echo $hottopic->getPostlabel()?></span>
                                </h4>
                                <a href="#" class="minimize">Minimize</a>
                            </div>
                            <div class="content" style="max-height: 295px; min-height: 295px;">
                            <p><?php echo $hottopic->getPost()?></p>
                             <p><?php 
                                    	if($hottopic->getPathurl() != NULL ){
                                    		if(strlen($hottopic->getPathurl() > 1)){
                                    			echo '<a href="'.HOTTOPIC_UPLOAD_FOLDER_PATH. $hottopic->getPathurl().'" target="_blank">View Here</a>';
                                    		}
                                    	}
                                    ?></p>
                                    <a href="hottopics.php" class="btn btn-info marginR10">More..</a>
                            </div>

                        </div><!-- End .box -->

                     <!-- THIS IS DOWNLOADED FROM WWW.SXRIPTGATES.COM - SO THIS IS YOUR NEW SITE FOR DOWNLOAD SCRIPT ;) -->
                    </div><!-- End .span8 -->
                    <?php 
	}
                    ?>