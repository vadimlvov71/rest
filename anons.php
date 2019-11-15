<?php
function item($item, $path, $type){?>
	<div class="col-sm-3">
		<a href="<?php echo($path)?>/dom<?php //echo($item["cat_translit"])?>/<?php //echo($item["goods_translit"]."_".$item["id"])?>">
			<div class="hotel-section marginSection shadow">	
				<div class="hotelHeader"><?php echo($item["name"])?></div>
				<div class="img">
					<img align="center" width="160" class="hotel_image img-fluid-height" src="<?php echo($path)?>/web/img/<?php echo($item["img"])?>" alt="">
				</div>
				<div class="hotelHeader">Подробно</div>
				<div class="hoteladditionalInfo">
					<div class="hotelAdditionalsectionAbsolute">
						<?php
						if($type != "rubric"){
						?>
							<div class="hotelAdditionalLink border-bottom">
								<a href="<?php echo($path)?>/pname<?php //echo($item["cat_translit"])?>/<?php //echo($item["goods_translit"]."_".$item["id"])?>">
									<?php echo($item["pname"])?>
								</a>
							</div>
						<?php
						}
						if($type != "hotel_type"){
						?>
						<div class="hotelAdditionalLink">
							<a href="<?php echo($path)?>/type<?php //echo($item["cat_translit"])?>/<?php //echo($item["goods_translit"]."_".$item["id"])?>">
								<?php echo($item["type"])?>
							</a>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</a>
	 </div>
<?php
}
function itemsDom($item, $path, $type){?>
	<div class="col-sm-12">
		<a href="<?php echo($path)?>/dom<?php //echo($item["cat_translit"])?>/<?php //echo($item["goods_translit"]."_".$item["id"])?>">
			<div class="hotel-section marginSection shadow">	
				<div class="hotelHeader"><?php echo($item["name"])?></div>
				<div class="img">
					<img align="center" width="160" class="hotel_image img-fluid-height" src="<?php echo($path)?>/web/img/<?php echo($item["img"])?>" alt="">
				</div>
				<div class="hotelHeader">Подробно</div>
				
			</div>
		</a>
	 </div>
<?php
}
function article($item, $path, $type){
	if($type == "article"){
		$href = "article";
	}else{
		$href = "dost";
	}
	?>
	<div class="col-sm-3">
		<a href="<?php echo($path."/".$href)?><?php //echo($item["cat_translit"])?>/<?php //echo($item["goods_translit"]."_".$item["id"])?>">
			<div class="article-section marginSection shadow">	
				<div class="hotelHeader"><?php echo($item["name"])?></div>
				<div class="img">
					<img align="center" width="160" class="hotel_image img-fluid-height" src="<?php echo($path)?>/web/img/<?php echo($item["img"])?>" alt="">
				</div>
				<div class="hotelHeader">Подробно</div>
				
			</div>
		</a>
	 </div>
<?php
}
function gallery($item, $path){
	if($type == "article"){
		$href = "article";
	}else{
		$href = "dost";
	}
	?>
	<div class="col-sm-12 blue">
			<div class="article-section marginSection shadow">	
				<div class="hotelHeader"><?php echo($item["name"])?></div>
				<div class="img">
					<img align="center" width="800" class="hotel_image_full" src="<?php echo($path)?>/web/img/<?php echo($item["img"])?>" alt="">
				</div>				
			</div>
		
	 </div>
<?php
}
function domItem($item, $type, $title, $path){
	if($type == "article"){
		$href = "article";
	}else{
		$href = "dost";
	}
	?>
	<div class="col-sm-12">
		<div class="article-section1 marginSection shadow1">	
			<div class="hotel-section-title"><?php echo($title)?></div>
			<div class="hotel-section-text">
				<?php
				if($type == "img"){?>
					<div class="float-left">
						<a href="<?php echo($path."/".$item["url"])?><?php //echo($item["cat_translit"])?>/<?php //echo($item["goods_translit"]."_".$item["id"])?>">
							<img align="center" width="100" class="hotel_image_dom" src="<?php echo($path)?>/web/img/<?php echo($item["img"])?>" alt="">
						</a>
					</div>	
					<?php
				}
				?>
				<div ><?php echo($item["text"])?></div>
			</div>			
		</div>
		
	 </div>
<?php
}
