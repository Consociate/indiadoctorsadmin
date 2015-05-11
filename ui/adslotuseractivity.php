<?php 
	include_once 'src/controllers/advertcontroller.php';
	$editorsposts = showAdvertisementsForSlot(AD_SLOT_BELOW_USER_ACTIVITY);
	if(count($editorsposts)>0 ){
		//$editorpost = $editorsposts[0];
	
?>

      	<?php 
      	$sizeofalerts = count($editorsposts);
      		$adid = rand(0, ($sizeofalerts-1));
      		$editorspost = $editorsposts[$adid];
      	?>
      	
      <a href="<?php echo $editorspost->getPostlabel()?>" target="_blank">	<img src="<?php echo ADVERTISEMENT_IMAGE_UPLOAD_FOLDER_PATH.'/'.$editorspost->getImageurl()?>" style="margin-left: 5%;" width="160px" height="600px" /></a>
    <br />
                    <?php 
	}             ?>

                    
                    