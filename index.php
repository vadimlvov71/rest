

<section class="white" style='background-image: url("<?php echo($site_domen_images)?>/images/karpaty_foto.jpg"); width: 100%; display: inline-block;'>
	<h1 class="text-class text-center">Надпись1</h1>
	<div class="container">
	  <div class="row">
		<div class="col-sm-8 ">
			<div class=" padding-section section1 ">
				<h3 class="text-class text-center">Column 1</h3>
				<div class="row">
					<div class="col-sm-6">
						
						<?php for($i=0; $i < 13;$i++){?>
							<div class="item_rest shadow">
								<a href="http://localhost/rest/rubric">Item <?php echo($i)?></a>
							</div>
						
						<?php }?>
					</div>
					<div class="col-sm-6">
					  
					 <?php for($i=0; $i < 13;$i++){?>
							<div class="item_rest shadow">
								<a href="http://localhost/rest/rubric">Item <?php echo($i)?></a>
							</div>
						
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<!---->
		<div class="col-sm-4 section2 blue shadow">
			<h3 class="text-class text-center">Column 3</h3>
		  <?php for($i=0; $i < 13;$i++){?>
				<div class="item_rest">
					<a href="http://localhost/rest/hotel_type">Item <?php echo($i)?></a>
				</div>
			<?php }?>
		</div>
		<!---->
	  </div>
	</div>
</section>
<section class="white">
	<h2 class="text-class text-center">Надпись 2222</h2>
	<div class="container">
	  <div class="row">
		<?php foreach($items as $item){
			item($item, $site_domen, "index");
		}?>
	  </div>
	</div>
</section>
<section class="blue" style='background-image: url("<?php echo($site_domen_images)?>/images/vodopad_karpaty.jpeg"); width: 100%; display: inline-block;'>
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
