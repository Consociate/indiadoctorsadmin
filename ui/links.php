<div class="span4">
						<div class="reminder">
                            <h4>Other Topics
                                <a href="implinks.php" class="icon tip" title="More.."><span class="icon16 icomoon-icon-plus-2"></span>More..</a>
                            </h4>
                            <ul>
                            <?php 
                            	include_once 'src/controllers/linkcontroller.php';
                            	$linklist = showLinks();
                            	$index = 0;
                            	foreach($linklist as $link){
                            		$postlabel = $link->getPostlabel();
                            		if(strlen($postlabel)> 30){
                            			$postlabel = substr($postlabel, 0,30).'...';
                            		}
                            		echo '<li class="clearfix">
	                                    <span class="txt">'.$postlabel.'</span>
	                                    <a href="implinkspost.php?tid='.$link->getTid().'" class="btn btn-warning">go</a>
                                	</li>';
                            		$index++;
                            		if($index == 5){
                            			break;
                            		}
                            	}
                            ?>
                                
                            </ul>
                        </div><!-- End .reminder -->

                    </div><!-- End .span4 -->