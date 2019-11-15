<?php
function rubricMenu($menu, $page){
	$class = "";
	
	?>
	<section class="white" >
		<h1 class="text-class text-center">Надпись1</h1>
		<div class="container">
			<ul class="nav nav-tabs">
				<?php 
				foreach($menu as $name => $url){
					if($page == $url){
						$class = "active";
						$class_div = "";
						//echo "1";
					}else{
						$class = "";
						$class_div = "hotel-section-menu";
						//echo "0";
					}
					?>
					<li class="nav-item <?php echo($class_div)?>">
						<a class="nav-link <?php echo($class)?>" href="<?php echo($url)?>"><?php echo($name)?></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
	</section>
<?php
}
?>
