
<?php
$h1 = "Надпись";
?>


<h1 class="text-class text-center"><?php echo($h1)?></h1>
<section class="white"></section>
	<div class="container">
		<div class="img float-left">
			<img align="center" width="400" class="img-fluid-height" src="<?php echo($site_domen_images)?>/img/2.jpg" alt="">
		</div>
		<div class="article-text">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut eu sem integer vitae justo eget magna fermentum. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Volutpat odio facilisis mauris sit amet. Massa tincidunt nunc pulvinar sapien. Diam volutpat commodo sed egestas. Vel eros donec ac odio tempor. Ultrices tincidunt arcu non sodales neque sodales ut. Iaculis urna id volutpat lacus laoreet non curabitur gravida arcu. Neque vitae tempus quam pellentesque nec. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Consectetur libero id faucibus nisl tincidunt eget nullam. Nisi lacus sed viverra tellus in hac. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Libero enim sed faucibus turpis in eu. Scelerisque eu ultrices vitae auctor eu augue ut lectus arcu. Quam elementum pulvinar etiam non quam lacus. Blandit cursus risus at ultrices mi. Ut faucibus pulvinar elementum integer enim neque volutpat ac.
		</div>
	</div>
</section>

<section class="blue">
	<h2 class="text-class text-center">Надпись 2222</h2>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			article($item, $site_domen, "article");
		}?>
	  </div>
	</div>
</section>
<section class="white">
	<h2 class="text-class text-center">Надпись 333333</h2>
	<div class="container">
	  <div class="row">
		<?php foreach($items1 as $item){
			item($item, $site_domen, "index");
		}?>
	  </div>
	</div>
</section>
