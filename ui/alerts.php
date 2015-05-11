<div class="span12">
<div class="alert alert-success"><strong>
       <span class="rotate">
<?php 
	include_once 'src/controllers/alertscontroller.php';
	$editorsposts = showAlertsPosts();
	if(count($editorsposts)>0 ){
		//$editorpost = $editorsposts[0];
	
?>

      	<?php 
      	$sizeofalerts = count($editorsposts);
      		$count = 0;
      		foreach($editorsposts as $post){
      			if($count == ($sizeofalerts-1)){
      				echo $post->getPostlabel().'';
      			}else{
      				echo $post->getPostlabel().';';
      			}
      			$count++;
      		}
      	?>
    
                    <?php 
	}             ?>
                      </span>
    </strong></div>

                    </div><!-- End .span8 -->
                    
                    