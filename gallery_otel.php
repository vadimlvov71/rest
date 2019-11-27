<?php
include_once "functions/rubric_menu.php";
$hotel_type = "Надпись";
?> 

<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<?php
				rubricMenu($menu_dom, "dom", $site_domen);
			?>
			<section class="blue">
				<h2 class="text-class text-center">Надпись 2222 333</h2>
				<div class="container">
				  <div class="row">
					<?php foreach($items as $item){
						gallery($item, $site_domen);
					}?>
				  </div>
				</div>
			</section>
		</div>
		<div class="col-sm-2">
			<section class="side shadow">
				<h2 class="text-class text-center">Надпись 2222</h2>
				<div class="container">
				  <div class="row">
					<?php foreach($items as $item){
						smallDom($item, $site_domen, "rubric");
					}?>
				  </div>
				</div>
			</section>
		</div>
	</div>
</div>
