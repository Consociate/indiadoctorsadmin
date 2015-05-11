<?php 
	include_once 'authenticationscript.php';
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

<?php include_once 'ui/topnavbar.php';?>
    </div><!-- End #header -->

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Sidebar collapse button-->  

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
        <!--Sidebar content-->
        <div id="sidebar">

            <?php include_once 'ui/shortcuts.php';?>
            <div class="sidenav">

                <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                    <h5 class="title" style="margin-bottom:0">Navigation</h5>
                </div><!-- End .sidenav-widget -->

                <?php include_once 'ui/sidenav.php';?>
            </div><!-- End sidenav -->

            <?php include_once 'ui/youractivity.php';?>

        </div><!-- End #sidebar -->
<?php 
$tid = $_GET['tid'];
?>
        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Job Openings</h3>                    

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 brocco-icon-search"></span></a>
                    </div>

                    <div class="search">

                        <?php include_once 'ui/search.php';?>
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="dashboard.php" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right"></span>
                            </span>
                        </li>
                        <li>
                            <a href="jobposts.php" class="tip" title="Back to Job Openings">
                                Job Openings
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right"></span>
                            </span>
                        </li>
                        <?php 
                include_once 'src/controllers/jobcontroller.php';
                	$postdetails = showJobPosts($tid);
                	$post = $postdetails[0];
                ?>
                        <li class="active"><?php echo $post->getPostlabel()?></li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">
                
				<div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 entypo-icon-write"></span>
                                        <span><?php  echo $post->getPostlabel().'- by '.$post->getCreatedby()?></span>
                                    </h4>
                                </div>
                                <div class="content">
                                <h4>Dated: <?php echo date('d-m-Y', strtotime($post->getDateofaddition()))?></h4>
                                    <p><?php echo $post->getPost()?></p>
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span6 -->                </div><!-- End .row-fluid -->
 <div class="span12">
					<?php 
                        	if($_GET['eid']==1){
                        		?>
                        		<div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Comment Updated!</strong> 
                            </div>
                        		<?php 
                        	}else if($_GET['eid']==2){
                        		?>
                        		<div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Oh snap!</strong> Error updating your comment. Please try again later.
                            </div>
                        		<?php 
                        	}
                        ?>
					</div>	
                        <div class="row-fluid">    
                        <div class="span12">
                            <div class="page-header">
                                <h4>Comments</h4>
                            </div>
                            <table cellpadding="0" cellspacing="0" border="0" class="responsive forumTable display table table-bordered" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php 
                            $postlist = showJobCommentsForPost($tid);//($sid);
                            $index = 0;
                            foreach($postlist as $post){
                            	echo '<tr>
                                    <td><div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 entypo-icon-write"></span>
                                        <span>'.$post->getCreatedBy().' replied on '.date('Y-m-d', strtotime($post->getDateofcomment())).'</span>
                                    </h4>
                                </div>
                                <div class="content">
                                    <p>'.$post->getComment().'</p>
                                </div>

                            </div><!-- End .box -->
                            </td>
                                  </tr>';
                            	$index++;
                            }
                            ?>
                            
                                </tbody>
                                <tfoot>
                                            <tr>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                </table>
                        </div><!-- End .span12 -->
                                  </div><!-- End .row-fluid -->
                                   <div class="row-fluid">
                                  <div class="span12">

                            <div class="box">

                                <div class="title">

                                    <h4>
                                        <span class="icon16 entypo-icon-write"></span>
                                        <span>Reply to this Post</span>
                                    </h4>
                                </div>
                                <div class="content">
                                <form class="form-horizontal" method="post" action="processjobposts.php" />
                                    <input type="hidden" name="action" id="action" value="2" />
                                    <input type="hidden" name="postid" id="postid" value="<?php echo $tid?>" />
                            <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span3" for="textarea">Comment: </label>
                                                    <textarea class="span8" id="textarea" name="comment" rows="10" cols="10"></textarea>
                                                </div>
                                            </div>  
                                        </div>
                               <div class="form-row row-fluid">        
                                <div class="span12">
                                    <div class="row-fluid">
                                        <div class="form-actions">
                                        <div class="span3"></div>
                                        <div class="span4 controls">
                                            <button type="submit" class="btn btn-info marginR10">Add Comment</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                                    </form>
                                </div>
                            </div><!-- End .box -->

                        </div><!-- End .span12 -->
                                  </div><!-- End .row-fluid -->
                
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
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


    </body>
</html>
