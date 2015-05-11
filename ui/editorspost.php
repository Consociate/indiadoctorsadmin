<?php 
	include_once 'src/controllers/editorpostcontroller.php';
	$editorsposts = showEditorsPosts();
	if(count($editorsposts)>0){
		$editorpost = $editorsposts[0];
	
?>
<div class="span8">

                        <div class="box chart gradient" >

                            <div class="title">

                                <h4>
                                    <span class="icon16 entypo-icon-write"></span>
                                    <span>Editor's Post</span>
                                </h4>
                                <a href="#" class="minimize">Minimize</a>
                            </div>
                            <div class="content" style="padding-bottom:0;max-height: 330px; min-height: 330px;">
                               <h4><?php echo $editorpost->getPostlabel()?></h4>
                                    <p><?php echo $editorpost->getPost()?></p>
                                            <a href="editorspost.php" class="btn btn-info marginR10">More..</a>
                                </div>

                        </div><!-- End .box -->

                    </div><!-- End .span8 -->
                    <?php 
	}
                    ?>