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
    <!-- THIS IS DOWNLOADED FROM WWW.SXRIPTGATES.COM - SO THIS IS YOUR NEW SITE FOR DOWNLOAD SCRIPT ;) -->
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
<link rel="stylesheet" type="text/css" href="css/simpletextrotator.css" />
    <!-- Main stylesheets -->
    <link href="css/main.css?v=1.1" rel="stylesheet" type="text/css" /> 

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
        document.documentElement.className += '';
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
<?php include_once 'ui/adslotuseractivity.php';?>
        </div><!-- End #sidebar -->

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Dashboard: Welcome <?php echo $user->getName()?></h3>                    

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 brocco-icon-search"></span></a>
                    </div>

                    <div class="search">
<?php include_once 'ui/search.php';?>
                        
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="#" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right"></span>
                            </span>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">



                </div><!-- End .row-fluid -->
			<div class="row-fluid">
                    <?php include_once 'ui/alerts.php';?>
                </div><!-- End .row-fluid -->
                <div class="row-fluid">
                    <?php include_once 'ui/editorspost.php';?>
                    <div class="span4">
                        <div class="box calendar gradient">

                            <div class="title">

                                <h4>
                                    <i class="icon16 brocco-icon-calendar"></i>
                                    <span>Events@Indiadoctors.org</span>
                                </h4>
<!--                                 <a href="#" class="minimize">Minimize</a> -->
                            </div>
                            <div class="content noPad"> 
                                <?php include_once 'ui/scroller.php';?>
                            </div>

                        </div><!-- End .box -->  
                    </div>
                    
 					
                </div><!-- End .row-fluid -->
<div class="row-fluid">
                    <?php include_once 'ui/adsloteditorspost.php';?>
                    <?php include_once 'ui/adslotsidescroll.php';?>
                </div><!-- End .row-fluid -->
                <div class="row-fluid">
					<?php include_once 'ui/hottopic.php';?>
					 <div class="span4">
                        <div class="box calendar gradient">

                            <div class="title">

                                <h4>
                                    <i class="icon16 brocco-icon-calendar"></i>
                                    <span>Education@Indiadoctors.org</span>
                                </h4>
<!--                                 <a href="#" class="minimize">Minimize</a> -->
                            </div>
                            <div class="content noPad"> 
                            
                               <?php include_once 'ui/scroller1.php';?>
                            </div>

                        </div><!-- End .box -->  
                    </div>
					
                </div><!-- End .row-fluid -->

 			<div class="row-fluid">
					<?php include_once 'ui/extratopics.php';?>
					 <?php include_once 'ui/links.php';?>
                </div><!-- End .row-fluid -->
                <div class="row-fluid">
                 <?php include_once 'ui/dailypoll.php';?>
                 
                    <?php include_once 'ui/todolist.php';?>
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
    <!-- THIS IS DOWNLOADED FROM WWW.SXRIPTGATES.COM - SO THIS IS YOUR NEW SITE FOR DOWNLOAD SCRIPT ;) -->
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
<!-- 	<script type="text/javascript" src="js/jquery.als-1.1.min.js"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
    	function tick2(){
    		$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
    		$('#ticker_03 li:first').slideUp( function () { $(this).appendTo($('#ticker_03')).slideDown(); });
    	}
    		setInterval(function(){ tick2 () }, 6000);
        });
    </script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
                    <script type="text/javascript">
    	$(".rotate").textrotator({
    		separator: ";",
    		speed: 10000
        	});
  	</script>
    </body>
</html>
