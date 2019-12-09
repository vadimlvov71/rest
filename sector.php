<?php
include_once "functions/rubric_menu.php";
$hotel_type = "Надпись";
?> 
<?php
rubricMenu($menu, "sector");
?>



<section class="white">
	<h1 class="text-class text-center"><?php echo($hotel_type)?></h1>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			item($item, $site_domen, "hotel_type");
		}?>
	  </div>
	</div>
</section>
<section class="blue">
	<div class="container">
	  <div class="row">
		<?php foreach($items1 as $item){
			item($item, $site_domen, "hotel_type");
		}?>
	  </div>
	</div>
</section>
<section class="blue"></section>
	<div class="container">
		<div class="img float-left">
			<img align="center" width="400" class="img-fluid-height" src="<?php echo($site_domen_images)?>/img/2.jpg" alt="">
		</div>
		<div class="article-text">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut eu sem integer vitae justo eget magna fermentum. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Volutpat odio facilisis mauris sit amet. Massa tincidunt nunc pulvinar sapien. Diam volutpat commodo sed egestas. Vel eros donec ac odio tempor. Ultrices tincidunt arcu non sodales neque sodales ut. Iaculis urna id volutpat lacus laoreet non curabitur gravida arcu. Neque vitae tempus quam pellentesque nec. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Consectetur libero id faucibus nisl tincidunt eget nullam. Nisi lacus sed viverra tellus in hac. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Libero enim sed faucibus turpis in eu. Scelerisque eu ultrices vitae auctor eu augue ut lectus arcu. Quam elementum pulvinar etiam non quam lacus. Blandit cursus risus at ultrices mi. Ut faucibus pulvinar elementum integer enim neque volutpat ac.
		</div>
	</div>
</section>

