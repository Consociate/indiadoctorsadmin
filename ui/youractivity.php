<?php 
	include_once 'src/controllers/activitycontroller.php';
?>
<div class="sidebar-widget">
                <h5 class="title">&nbsp;</h5>
                <div class="content">
                    <div class="rightnow">
                         <ul class="unstyled">
                            <li><span class="number"><?php echo showNumberOfForumPostsByYou($_SESSION['uid'])?></span><span class="icon16 icomoon-icon-new"></span>Forum Posts</li>
                            <li><span class="number"><?php echo showNumberOfLibraryPostsByYou($_SESSION['uid'])?></span><span class="icon16 icomoon-icon-paper"></span>Library Posts</li>
                            <li><span class="number"><?php echo showNumberOfExamQuestionsByYou($_SESSION['uid'])?></span><span class="icon16 brocco-icon-list"></span>Exam Questions</li>
                            <li><span class="number"><?php echo showNumberOfForumCommentsByYou($_SESSION['uid'])?></span><span class="icon16 iconic-icon-comment-stroke"></span>Forum Comments</li>
                         </ul>  
                    </div>
                </div>
<!-- THIS IS DOWNLOADED FROM WWW.SXRIPTGATES.COM - SO THIS IS YOUR NEW SITE FOR DOWNLOAD SCRIPT ;) -->
            </div><!-- End .sidenav-widget -->
            
            
