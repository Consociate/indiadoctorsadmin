<!-- define a container with class "als-container": this will be the object binded to ALS; we suggest to give it an ID
to retrieve it easily during ALS inizialization -->

<div class="als-container" id="my-als-list">

<!-- if you choose manual scrolling (which is set by default), insert <span> with class "als-prev"  and "als-next": 
they define the buttons "previous" and "next"; within the <span> you can use images or simple text -->	
  
<!--  <span class="als-prev"><img src="images/prev.png" alt="prev" title="previous" /></span>-->

<!-- define a container with class "als-viewport": this will be the viewport for the list visible elements -->

  <div class="als-viewport">
  
<!-- define a container with class "als-wrapper": this will be the wrapper for the list elements, 
it can be a classic <ul> element or even a <div> element -->

    <ul class="als-wrapper" id="ticker_02">

<!-- define the list elements, each must have class "als-item"; they can be classic <li> elements 
or generic <div> elements and they can contain anything: text, images, ... -->
<?php 
	include_once 'src/controllers/scrollercontroller.php';
	$data = getLatestUpdatesOnIndiaDoctors();
	foreach($data as $ent){
		?>
		 <li class="als-item"><?php echo $ent?></li> <!-- text only -->
		<?php 
	}
?>
<!--      <li class="als-item"><a href="hottopics.php">orange</a></li>  text only -->
<!--      <li class="als-item">apple</li>  image -->
<!--      <li class="als-item">banana</li>  image + text -->

    </ul> <!-- als-wrapper end -->
  </div> <!-- als-viewport end -->
<!--  <span class="als-next"><img src="images/next.png" alt="next" title="next" /></span>  "next" button -->
</div> <!-- als-container end -->