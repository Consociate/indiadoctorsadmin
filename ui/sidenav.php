<?php 
	include_once 'src/globalvars.php';
	$role = $_SESSION['at'];
?>
<div class="mainnav">
                    <ul>
                        <?php 
                                	switch($role){
                                		case USER_ADMIN:
                                		case USER_DOCTOR:
                                ?>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-user-2"></span>My Profile</a>
                            <ul class="sub">
                            <li><a href="aboutme.php"><span class="icon16 icomoon-icon-user-2"></span>About Me</a></li>
                                <li><a href="qualifications.php"><span class="icon16  icomoon-icon-user-2"></span>Qualifications</a></li>
                                <li><a href="workplaces.php"><span class="icon16  icomoon-icon-user-2"></span>Workplaces</a></li>
                                
                                <li><a href="specializations.php"><span class="icon16 icomoon-icon-user-2"></span>Specialities</a></li>
                                <li><a href="share.php"><span class="icon16 iconic-icon-share"></span>Share Information</a></li>
                            </ul>
                        </li>
                        <?php 
                                	break;
                                	}
                                ?>
                        <?php 
                                	switch($role){
                                		case USER_ADMIN:
                                		case USER_DOCTOR:
                                		case USER_STUDENT:
                                ?>
                        <li><a href="http://webmail.indiadoctors.org" title="Please contact us for generating Email Id for you" class="tipB" target="_blank"><span class="icon16 iconic-icon-mail"></span>Email</a></li>
                        <li><a href="forum.php"><span class="icon16 icomoon-icon-font"></span>Forum</a></li>
                        <li>
                            <a href="#"><span class="icon16 silk-icon-columns"></span>Library</a>
                            <ul class="sub">
                            <li><a href="ebooks.php"><span class="icon16 silk-icon-columns"></span>E-Books/E-Notes</a></li>
                                <li><a href="images.php"><span class="icon16 silk-icon-columns"></span>Images</a></li>
                                <li><a href="guidelines.php"><span class="icon16 silk-icon-columns"></span>Guidelines</a></li>
                                <li><a href="journal.php"><span class="icon16 silk-icon-columns"></span>Journals</a></li>
                                <li><a href="examques.php"><span class="icon16 silk-icon-columns"></span>University Exams</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="icon16 icomoon-icon-grid-view"></span>PG Entrance Exams</a>
                        <ul class="sub">
                            <li><a href="mdexam.php"><span class="icon16 icomoon-icon-grid-view"></span>MD/MS Questions</a></li>
<!--                                 <li><a href="dmexam.php"><span class="icon16 icomoon-icon-grid-view"></span>DM/Mch Questions</a></li> -->
                                <li><a href="quiz.php"><span class="icon16 icomoon-icon-grid-view"></span>Test Questions</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="icon16 iconic-icon-microphone"></span>CME</a>
                        	<ul class="sub">
                            <li><a href="courses.php"><span class="icon16 iconic-icon-microphone"></span>Courses</a></li>
                                <li><a href="conferences.php"><span class="icon16 iconic-icon-microphone"></span>Conferences</a></li>
                            </ul>
                        </li>
                        <?php 
                        	break;
                                	}
                        ?>
                        <li><a href="jobposts.php"><span class="icon16 iconic-icon-calendar"></span>Jobs</a></li>
                        <?php 
                                	switch($role){
                                		case USER_ADMIN:
                                		case USER_DOCTOR:
                                		case USER_STUDENT:
                                ?>
                        <li><a href="classified.php"><span class="icon16  iconic-icon-pin"></span>Classifieds</a></li>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-newspaper"></span>News</a>
                            <ul class="sub">
                            <li><a href="nationalnews.php"><span class="icon16 icomoon-icon-newspaper"></span>National News</a></li>
                                <li><a href="internationalnews.php"><span class="icon16 icomoon-icon-newspaper"></span>International News</a></li>
                            </ul>
                        </li>
<!--                         <li><a href="medicolegal.php"><span class="icon16 iconic-icon-book-alt2"></span>Medico-Legal</a></li> -->
                        <li><a href="surveys.php"><span class="icon16  iconic-icon-chart-alt"></span>Surveys</a></li>
                        <?php 
                        	break;
                                	}
                        ?>
                        <?php 
                                	switch($role){
                                		case USER_ADMIN:
                                ?>
                       <li>
                            <a href="#"><span class="icon16 silk-icon-columns"></span>Admin</a>
                            <ul class="sub">
                             <li><a href="editorspost.php"><span class="icon16 icomoon-icon-pencil"></span>Editor's Post</a></li>
                             <li><a href="implinks.php"><span class="icon16 icomoon-icon-pencil"></span>Important Links</a></li>
                             <li><a href="speciality.php"><span class="icon16 icomoon-icon-pencil"></span>Specialities</a></li>
                             <li><a href="college.php"><span class="icon16 icomoon-icon-pencil"></span>Colleges/Universities</a></li>
                             <li><a href="hottopics.php"><span class="icon16 icomoon-icon-pencil"></span>Hot Topics</a></li>
                             <li><a href="extratopics.php"><span class="icon16 icomoon-icon-pencil"></span>Extra Topics</a></li>
                             <li><a href="userlist.php"><span class="icon16 icomoon-icon-user-2"></span>User List</a></li>
                             <li><a href="team.php"><span class="icon16 icomoon-icon-user-2"></span>Team on Website</a></li>
                             <li><a href="diary.php"><span class="icon16 icomoon-icon-user-2"></span>Admin Diary</a></li>
                              <li><a href="alerts.php"><span class="icon16 icomoon-icon-user-2"></span>Alerts</a></li>
                               <li><a href="adverts.php"><span class="icon16 icomoon-icon-user-2"></span>Advertisements</a></li>
                            </ul>
                        </li> 
                        <?php 
                        	break;
                                	}
                        ?>
                    </ul>
                </div>