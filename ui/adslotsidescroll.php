<div class="span4">
<?php 
	include_once 'src/controllers/advertcontroller.php';
	$editorsposts = showAdvertisementsForSlot(AD_SLOT_BELOW_SIDE_SCROLL);
	if(count($editorsposts)>0 ){
		//$editorpost = $editorsposts[0];
	
      	$sizeofalerts = count($editorsposts);
      		$adid = rand(0, ($sizeofalerts-1));
      		$editorspost = $editorsposts[$adid];
      	?>
      	
      <a href="<?php echo $editorspost->getPostlabel()?>" target="_blank">	
      <img src="<?php echo ADVERTISEMENT_IMAGE_UPLOAD_FOLDER_PATH.'/'.$editorspost->getImageurl()?>"  width="450px" height="160px" /></a>
    <br />
                    <?php 
	}             ?>

                    </div><!-- End .span8 -->
                    
                    