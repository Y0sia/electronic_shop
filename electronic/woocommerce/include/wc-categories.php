<?php
if ( !defined('ABSPATH') ) {
	exit;
}


function woocommerce_category($name) {
	$categories = array();
	$counter = 0;
	$terms = get_terms( array(
	'taxonomy' => 'product_cat',
	'hide_empty' => true,
	'pad_counts'=> true,
	'orderby' => 'name',
	'parent' => 0
) ); 
	foreach( $terms as $term ){
		if($term->name == $name) {
			$tax = $term->taxonomy;
			$children_terms = get_terms( array(
			'taxonomy' => $tax,
			'hide_empty' => false,
			'parent' => $term->term_id
		) );
			if($children_terms){ 
						foreach ($children_terms as $children_term) {
							$categories[$counter] = $children_term->name;
							$counter++;
				}
			}
		}
	}
	return $categories;
}

function category_search() {
	
	$terms = get_terms( array(
	'taxonomy' => 'product_cat',
	'hide_empty' => true,
	'pad_counts'=> true,
	'orderby' => 'name',
	'parent' => 0
) ); 
	?>
		<select name="product_cat" id="product_cat">
			<option class="all-cate" value="0">All Categories</option>
			<?php foreach($terms as $term) { 
				$tax = $term->taxonomy;
				$children_terms = get_terms( array(
				'taxonomy' => $tax,
				'hide_empty' => false,
				'parent' => $term->term_id
			) ); ?>
					<optgroup  class="cate-item-head" label="<?php echo $term->name;?>">
				<?php if($children_terms){ 
							 foreach ($children_terms as $children_term) { ?>
									<option class="c-item" value="<?php echo $children_term->slug;?>"><?php echo $children_term->name;?></option>
					<?php	}
						} ?>
				</optgroup>
				<?php } ?>
			</select> <?php
}
function category_mega_menu() {
		$terms = get_terms( array(
			'taxonomy' => 'product_cat',
			'hide_empty' => true,
			'pad_counts'=> true,
			'orderby' => 'name',
			'parent' => 0
		) ); ?>
		   <div class="left-category-menu hidden-sm hidden-xs">
		   	<div class="left-product-cat">
		   		<div class="category-heading">
	                <h2>categories</h2>
	             </div>
	             <div class="category-menu-list">
	             	<ul>
	         <?php foreach($terms as $term) { 
							$tax = $term->taxonomy;
							$children_terms = get_terms( array(
							'taxonomy' => $tax,
							'hide_empty' => false,
							'parent' => $term->term_id
						) );
						$image = woocommerce_category_image($term->term_id); ?>
	                           <li class="arrow-plus">
	                           	<a href="shop.html"><?php echo $term->name ?></a>
	                           	<?php if($children_terms) { ?>
	                           		<? if(!$image) { ?>
						 							<div class="cat-left-drop-menu">
						 							<?php }
						 								else { ?>
						 										<div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">
						 								<?php } ?>
						 								<?php foreach ($children_terms as $children_term) { ?>
						 									<div class="cat-left-drop-menu-left">
						 										<a class="menu-item-heading" href="#"><?php echo $children_term->name ?></a>
						 									
						 									<?php 
						 											$children_tax = $children_term->taxonomy;
																	$children_children_terms = get_terms( array(
																	'taxonomy' => $children_tax,
																	'hide_empty' => false,
																	'parent' => $children_term->term_id
																) ); 
																if($children_children_terms) {
																	foreach($children_children_terms as $children_children_term) {
																		?> <ul>
																				<li>
																					<a href="#"><?php echo $children_children_term->name ?></a>
																				</li>
																			</ul>
																	<?php	}
																	} ?>
																</div>
						 									<?php } ?>
						 									<?php if($image) { ?>
						 											<div class="cat-left-drop-menu-left cat-left-drop-menu-photo">
						 												<a><img src="<?php echo $image ?>"></a>
						 											</div>
						 									<?php } ?>
						 							</div>
						 						<?php } ?>
	                           </li>
							<?php } ?>
							</ul>
						</div>
				</div>
			</div>
			<?php
}