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
			<div class="row">
				<div class="col-sm-12">
					<div class="img-article 3">
						<img align="center"  class="img-fluid" src="<?php echo($site_domen_images)?>/img/2.jpg" alt="">
					</div>
				</div>
				<?php
				domItem($dom[0], $type, "hello", $site_domen);
				domItem($dom[1], $type, "hello", $site_domen);
				domItem($dom[2], "img", "dffhghg", $site_domen);
				?>
			</div>
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
