<?php 
include_once 'src/globalvars.php';
	if($_GET['at'] == USER_ADMIN){
		header('index.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
    <?php include_once 'ui/mainheader.php';?>

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
    <!-- Text -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> --> 
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css" />
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Plugin stylesheets -->
    <link href="plugins/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
    <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/jpages/jPages.css" rel="stylesheet" type="text/css" />
    <link href="plugins/prettify/prettify.css" type="text/css" rel="stylesheet" />
    <link href="plugins/inputlimiter/jquery.inputlimiter.css" type="text/css" rel="stylesheet" />
    <link href="plugins/ibutton/jquery.ibutton.css" type="text/css" rel="stylesheet" />
    <link href="plugins/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="plugins/color-picker/color-picker.css" type="text/css" rel="stylesheet" />
    <link href="plugins/select/select2.css" type="text/css" rel="stylesheet" />
    <link href="plugins/validate/validate.css" type="text/css" rel="stylesheet" />
    <link href="plugins/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />
    <link href="plugins/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />
    <link href="plugins/smartWizzard/smart_wizard.css" type="text/css" rel="stylesheet" />
    <link href="plugins/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    <link href="plugins/elfinder/elfinder.css" type="text/css" rel="stylesheet" />
    <link href="plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />
    
    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className += 'loadstate';
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
      
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
    
    <div id="header">

        <div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="index.php">Indiadoctors.org<span class="slogan">Networking Indian Doctors</span></a>
                <div class="nav-no-collapse">
                    
                  
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 

    </div><!-- End #header -->

    <div id="wrapper">

        <!--Body content-->
        <div id="content" style="margin-left: 0px;" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">


                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">

                    <div class="span12">

                        <div class="page-header">
                            <h4>Sign Up Page</h4>
                        </div>
<?php include_once 'src/globalvars.php';?>
                        <form class="form-horizontal seperator" id="register-form" method="post" action="processregistration.php" />
                        <input type="hidden" name="at" id="at" value="<?php echo $_GET['at']?>" />
                        <p class="error_message" style="color: red;"></p>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="username">Username:</label>
                                        <input class="span4" id="username" name="username" type="text" placeholder="This will be used for Login" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="normal">Password:</label>
                                        <div class="span4 controls">
                                            <input class="span12" id="password" name="password" type="password" placeholder="Enter your password" value="" />
                                            <input class="span12" id="passwordConfirm" name="confirm_password" type="password" placeholder="Enter your password again" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="name">Full name:</label>
                                        <input class="span4" id="name" name="name" type="text" placeholder="Type in your full name" value="" />
                                    </div>
                                </div>
                            </div>
                            <?php 
                            include_once 'src/globalvars.php';
                            	$at = $_GET['at'];
                            	switch($at){
                            		case USER_DOCTOR:
                            			?>
                            			<div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="mci">Medical council number:</label>
                                        <input class="span4" id="mci" name="mci" type="text" placeholder="Enter your Medical council number" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="textarea">Address</label>
                                        <textarea class="span4 limit elastic" id="address" name="address" rows="3" cols="5"></textarea>
                                    </div>
                                </div>  
                            </div>
                            			<?php 
                            			break;
                            		case USER_HR:
                            			?>
                            			<div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="mci">Current Position:</label>
                                        <input class="span4" id="mci" name="mci" type="text" placeholder="Enter your Current Position" />
                                    </div>
                                </div>
                            </div>
                            			
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="textarea">Hospital Address: </label>
                                        <textarea class="span4 limit elastic" id="address" name="address" rows="3" cols="5"></textarea>
                                    </div>
                                </div>  
                            </div>
                            			<?php 
                            			break;
                            		case USER_STUDENT:
                            			?>
                            			<div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="mci">Year of Enrollment in College:</label>
                                        <select class="span4" id="mci" name="mci" >
                                        <?php 
                                        	$year = date('Y');
                                        	for($i = $year; $i>=2000; $i--){
                                        		echo '<option value="'.$i.'">'.$i.'</option>';
                                        	}
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="textarea">College/University Name</label>
                                        <textarea class="span4 limit elastic" id="address" name="address" rows="3" cols="5"></textarea>
                                    </div>
                                </div>  
                            </div>
                            			<?php 
                            			break;
                            	}
                            ?>
                            
                            
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="email">Email:</label>
                                        <input class="span4" id="email" name="email" type="text" placeholder="you@you.com" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="mobileno">Mobile No/Tel No.:</label>
                                        <input class="span4" id="mobileno" name="mobileno" type="text" placeholder="91999999999" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="gender">Gender:</label>
                                        <div class="left marginT5 marginR10">
                                            <input type="radio" name="gender" id="optionsRadios1" value="1" checked="checked" />
                                            Male
                                        </div>
                                        <div class="left marginT5 marginR10">
                                            <input type="radio" name="gender" id="optionsRadios2" value="2" />
                                            Female
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="email">Accept Terms &amp; Conditions: </label>
                                        <div class="span4 controls">       
                                            <div class="left marginR10">
                                                <input type="checkbox" id="inlineCheckbox4" name="terms" value="1" checked="checked" class="ibuttonCheck" />
                                                <a data-toggle="modal" href="#myModal1">View Terms &amp; Conditions</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="error_message" style="color: red;"></p>
                            <div class="form-row row-fluid">        
                                <div class="span12">
                                    <div class="row-fluid">
                                        <div class="form-actions">
                                        <div class="span3"></div>
                                        <div class="span4 controls">
                                            <button type="submit" class="btn btn-info marginR10">Register</button>
                                            <a href="index.php" class="btn btn-danger">Cancel</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </form>
                      
                    </div><!-- End .span12 -->

                </div><!-- End .row-fluid -->

                
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    <div class="modal fade hide" id="myModal1">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="icon12 minia-icon-close"></span></button>
                        <h3>Terms &amp; Conditions</h3>
                    </div>
                    <div class="modal-body">
                    <?php include_once 'ui/terms.php';?>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                    </div>
                </div>
    </div><!-- End #wrapper -->
    
    <!-- Le javascript
    ================================================== -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>  
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>

    <!-- Load plugins -->
    <script type="text/javascript" src="plugins/qtip/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.grow.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.tooltip_0.4.4.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.orderBars.js"></script>

    <script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="plugins/knob/jquery.knob.js"></script>
    <script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="plugins/prettify/prettify.js"></script>

    <script type="text/javascript" src="plugins/watermark/jquery.watermark.min.js"></script>
    <script type="text/javascript" src="plugins/elastic/jquery.elastic.js"></script>
    <script type="text/javascript" src="plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>
    <script type="text/javascript" src="plugins/maskedinput/jquery.maskedinput-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/ibutton/jquery.ibutton.min.js"></script>
    <script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="plugins/stepper/ui.stepper.js"></script>
    <script type="text/javascript" src="plugins/color-picker/colorpicker.js"></script>
    <script type="text/javascript" src="plugins/timeentry/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="plugins/select/select2.min.js"></script>
    <script type="text/javascript" src="plugins/dualselect/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/tiny_mce/jquery.tinymce.js"></script>
    <script type="text/javascript" src="plugins/validate/jquery.validate.min.js"></script>

    <script type="text/javascript" src="plugins/animated-progress-bar/jquery.progressbar.js"></script>
    <script type="text/javascript" src="plugins/pnotify/jquery.pnotify.min.js"></script>
    <script type="text/javascript" src="plugins/lazy-load/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="plugins/jpages/jPages.min.js"></script>
    <script type="text/javascript" src="plugins/pretty-photo/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="plugins/smartWizzard/jquery.smartWizard-2.0.min.js"></script>

    <script type="text/javascript" src="plugins/ios-fix/ios-orientationchange-fix.js"></script>

    <script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/elfinder/elfinder.min.js"></script>
    <script type="text/javascript" src="plugins/plupload/plupload.js"></script>
    <script type="text/javascript" src="plugins/plupload/plupload.html4.js"></script>
    <script type="text/javascript" src="plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

    <!-- Init plugins -->
    <script type="text/javascript" src="js/statistic.js"></script><!-- Control graphs ( chart, pies and etc) -->

    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
$(function(){
	$('#register-form').submit(function(){
		var username = $('#username').val();
		var password = $('#password').val();
		var confirmpassword = $('#passwordConfirm').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var mobileno = $('#mobileno').val();
		//var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
		var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var numberpattern = /^\d+$/;
		var at = $('#at').val();

		
		if(!email.match(pattern)){
			$('.error_message').html('Please enter valid email address in the form of youremail@domain.com');
			return false;
		}
		if(username.length <4 && username == ""){
			$('.error_message').html('Please enter username. Username should be greater than 4 characters.');
			return false;
		}
		if(password.length <6){
			$('.error_message').html('Please enter password. Password should be greater than 6 characters.');
			return false;
		}
		if(password != confirmpassword){
			$('.error_message').html('Passwords don\'t match. Please put the same password in confirm password field');
			return false;
		}

		if(name.length<2){
			$('.error_message').html('Please enter your full name');
			return false;
		}
		if(email.length<2){
			$('.error_message').html('Please enter your full email address');
			return false;
		}
		if(mobileno.length<10){
			$('.error_message').html('Please enter your full mobile number');
			return false;
		}
		if(!mobileno.match(numberpattern)){
			$('.error_message').html('Please enter your numbers only for mobile number');
			return false;
		}

		if(at == 1){
			var mci = $('#mci').val();
			if(!mci.match(numberpattern)){
				$('.error_message').html('Please enter your numbers only for MCI Registration Number');
				return false;
			}
		}

		if(at == 3){
			var hospitalname = $('#address').val();
			if(hospitalname.length<2){
				$('.error_message').html('Please enter hospital name');
				return false;
			}
		}
		
			return true;
		});
});
   </script>

    </body>
</html>
