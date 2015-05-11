<?php 
	include_once 'src/controllers/hottopiccontroller.php';
	$hottopiclist = showExtratopicPosts();
	if(count($hottopiclist)){
		$entry = 0;
		foreach($hottopiclist as $hottopic){
			
		
?>
<div class="span8">

                        <div class="box gradient">

                            <div class="title">

                                <h4>
                                    <span class="icon16 entypo-icon-thumbs-up"></span>
                                    <span><?php echo $hottopic->getPostlabel()?></span>
                                </h4>
                                <a href="#" class="minimize">Minimize</a>
                            </div>
                            <div class="content" style="max-height: 250px; min-height: 250px;">
                            <p><?php echo $hottopic->getPost()?></p>
                             <p><?php 
                                    	if($hottopic->getPathurl() != NULL ){
                                    		if(strlen($hottopic->getPathurl() > 1)){
                                    			echo '<a href="'.EXTRA_UPLOAD_FOLDER_PATH. $hottopic->getPathurl().'" target="_blank">View Here</a>';
                                    		}
                                    	}
                                    ?></p>
                                     <a href="extratopics.php" class="btn btn-info marginR10">More..</a>
                            </div>

                        </div><!-- End .box -->

                     <!-- THIS IS DOWNLOADED FROM WWW.SXRIPTGATES.COM - SO THIS IS YOUR NEW SITE FOR DOWNLOAD SCRIPT ;) -->
                    </div><!-- End .span8 -->
                    <?php 
                    $entry++;
                    if($entry== 3){
                    	break;
                    }
	}
	}
                    ?>