<?php
include_once "functions/rubric_menu.php";
$hotel_type = "Надпись";
?> 
<?php
rubricMenu($menu, "rubric");
?>


<section class="white">
	<h2 class="text-class text-center">Надпись 2222</h2>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			item($item, $site_domen, "rubric");
		}?>
	  </div>
	</div>
</section>
<section class="blue">
	<h2 class="text-class text-center">Надпись 2222</h2>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			item($item, $site_domen, "rubric");
		}?>
	  </div>
	</div>
</section>
<section class="white">
	<h3 class="text-class text-center">Надпись 3333</h3>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			article($item, $site_domen, "article");
		}?>
	  </div>
	</div>
</section>
<section class="blue">
	<h4 class="text-class text-center">Надпись</h4>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			article($item, $site_domen, "dost");
		}?>
	  </div>
	</div>
</section>

