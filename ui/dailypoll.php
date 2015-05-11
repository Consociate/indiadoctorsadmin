<?php 
	include_once 'src/controllers/surveycontroller.php';
	$surveys = showSuvreyPosts();
	if(count($surveys)){
		$survey = $surveys[0];
		
?>
<div class="span8">
                        <div class="box gradient">
                            <div class="title">
<?php 
								$totalnoofvotes = showTotalNoOfVotesForSurvey($survey->getTid());
							?>
                                <h4>
                                    <span class="icon16 icomoon-icon-pie"></span>
                                    <span><?php echo $survey->getPostlabel()?> <span class="label label-success"><span class="icomoon-icon-arrow-up white"></span><?php echo $totalnoofvotes?></span></span>
                                </h4>
                                <a href="#" class="minimize">Minimize</a>
                            </div>
                            <div class="content">
                              
                                <div class="vital-stats" style="padding-bottom:23px">
                                    <ul class="unstyled">
                                    <?php 
                                    	$surveyoptions = showSurveyOptions($survey->getTid());
                                    	$showvotingoptions = checkIfUserhasVotedForThisSurvey($_SESSION['uid'], $survey->getTid());
                                    	foreach($surveyoptions as $option){
                                    		$percent = 0;
                                    		$optionvotes = showNoofVotesForSurveyOption($survey->getTid(), $option->getOptionid());
                                    		if($totalnoofvotes){
                                    			$percent = round(($optionvotes/$totalnoofvotes), 0);
                                    		}
                                    		echo '<li>
                                            <span class="icomoon-icon-arrow-up green"></span>'.$option->getOptionlabel().' '.$percent.'% Votes 
                                            <span class="pull-right strong">'.$optionvotes.'</span>';
                                    		if(!$showvotingoptions){
                                    			echo '<a href="processsurveypost.php?action=2&tid='.$survey->getTid().'&oid='.$option->getOptionid().'" class="pull left btn btn-info marginR10">Vote</a>';
                                    		}
                                            echo '
                                            <div class="progress progress-striped ">
                                                <div class="bar" style="width: '.$percent.'%;"></div>
                                            </div>
                                        	</li>';
                                    	}
                                    ?>
                                        
                                        
                                    </ul>
                                </div>

                            </div>

                        </div><!-- End .box -->  
                    </div><!-- End .span8 -->
                    <?php 
	}
                    ?>