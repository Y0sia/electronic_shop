<?php
if ( !defined('ABSPATH') ) {
	exit;
}

function category_search() {
	
	$terms = get_terms( array(
	'taxonomy' => 'product_cat',
	'hide_empty' => true,
	'pad_counts'=> true,
	'orderby' => 'name',
	'parent' => 0
) ); 
	?><select>
		<option class="all-cate">All Categories</option>
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
								<option class="c-item"><?php echo $children_term->name;?></option>
				<?php	}
					} ?>
			</optgroup>
			<?php } ?>
		</select><?php
}
function category_mega_menu() {
		$terms = get_terms( array(
			'taxonomy' => 'product_cat',
			'hide_empty' => true,
			'pad_counts'=> true,
			'orderby' => 'name',
			'parent' => 0
		) ); 
		$counter = 0; ?>
		   <div class="left-category-menu hidden-sm hidden-xs">
		   	<div class="left-product-cat">
	         <?php foreach($terms as $term) { 
							$tax = $term->taxonomy;
							$children_terms = get_terms( array(
							'taxonomy' => $tax,
							'hide_empty' => false,
							'parent' => $term->term_id
						) ); 
								if($counter == 0) { ?>
	                            <div class="category-heading">
	                                <h2>categories</h2>
	                            </div>
	                            <?php $counter = 1; ?>
							<?php } ?>
									<div class="category-menu-list">
	                           <ul>
	                           	<li class="arrow-plus">
	                           		<a href="shop.html"><?php echo $term->name ?></a>
	                           		<?php if($children_terms) { ?>
						 									<div class="cat-left-drop-menu">
						 										<div class="cat-left-drop-menu-left">
						 											<?php foreach ($children_terms as $children_term) { ?>
						 											<a class="menu-item-heading" href="#"><?php echo $children_term->name ?></a>
						 										<?php } ?>
						 										</div>
						 									</div>
						 								<?php } ?>
	                           	</li>
	                           </ul>
	                        </div>
							<?php } ?>
				</div>
			</div>
			<?php
}