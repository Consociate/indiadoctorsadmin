<?php 
	include_once 'src/controllers/profilecontroller.php';
	include_once 'src/globalvars.php';
	include_once 'src/globalvars.php';
	$role = $_SESSION['at'];
	$userdata = array();
	$user = null;
	switch($role){
		case USER_ADMIN:
		case USER_DOCTOR:
			$userdata = fetchDoctorBasicProfile($_SESSION['uid']);
	$user = $userdata[0];
			break;
		case USER_HR:
			$userdata = fetchHRBasicProfile($_SESSION['uid']);
	$user = $userdata[0];
			break;
		case USER_STUDENT:
			$userdata = fetchStudentBasicProfile($_SESSION['uid']);
	$user = $userdata[0];
			break;
	}
?>
<div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="dashboard.php">Indiadoctors.org<span class="slogan">Networking Indian Doctors</span></a>
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li class="active"><a href="dashboard.php"><span class="icon16 icomoon-icon-screen"></span> Dashboard</a></li>
                    </ul>
                  <!-- THIS IS DOWNLOADED FROM WWW.SXRIPTGATES.COM - SO THIS IS YOUR NEW SITE FOR DOWNLOAD SCRIPT ;) -->
                    <ul class="nav pull-right usernav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <?php 
                                	if(strlen($user->getProfileimageurlpath())>2){
                                		?>
                                		<img src="<?php echo PROFILE_IMG_UPLOAD_FOLDER_PATH.$user->getProfileimageurlpath()?>" height="33" alt="" class="image" />
                                		<?php 
                                	}else{
                                		?>
                                		<img src="images/avatar3.jpeg" height="33" alt="" class="image" />
                                		<?php 
                                	}
                                ?>
                                 
                                <span class="txt"><?php echo $user->getName()?></span>
                                <b class="caret"></b>
                            </a>
                            <?php 
	
	switch($role){
		case USER_ADMIN:
		case USER_DOCTOR:
			?>
			<ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>
                                            <a href="editprofile.php"><span class="icon16 icomoon-icon-user-3"></span>Edit profile</a>
                                        </li>
                                   
			<?php 
			break;
	}
?>
 <li>
                                            <a href="changepassword.php"><span class="icon16 icomoon-icon-user-3"></span>Change Password</a>
                                        </li>
</ul>
                                </li>
                            </ul>
                            
                        </li>
                        <li><a href="logout.php"><span class="icon16 icomoon-icon-exit"></span> Logout</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 