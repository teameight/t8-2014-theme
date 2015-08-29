<?php
/**
 * Post images
 *
 * loops thru the ACF fields for post images
 *
 */
?>
<?php while(has_sub_field("images")): ?>
	<?php if(get_row_layout() == "image_only"): // layout: Image Only ?>
		<?php  
			$attachment_id = get_sub_field('image');
			$size = "large";
			$class = get_sub_field('image_class');
			
			teameight_singles_images($attachment_id, $size, $class);
		?>
	<?php elseif(get_row_layout() == "image_and_text"): ?>
	<div class="imgdesc cf">
		<?php  
			$attachment_id = get_sub_field('image');
			$size = "large";
			$class = get_sub_field('image_class');
			 
			teameight_singles_images($attachment_id, $size, $class);
		?>
		<div class="desc">
			<div class="text">
				<?php the_sub_field('text'); ?>
			</div>
		</div>
	</div>	
	<?php elseif(get_row_layout() == "text_only"): ?>
	<div class="freeform">
		<?php the_sub_field('text'); ?>
	</div>
	<?php elseif( get_row_layout() == "row2" || get_row_layout() == "row3" ): ?>
	<?php 
		$row = ( get_row_layout() == "row2" ? 2 : 3 ); 
		$imgsize = 'medium';
	?>
	<div class="g g-<?php echo $row; ?>up cf">
		<div class="gi">
			<?php  
				$attachment_id = get_sub_field('image_1');
				$class = get_sub_field('image_1_class');
			 
				teameight_singles_images($attachment_id, $size, $class);
			?>
		</div>
		<div class="gi">
			<?php  
				$attachment_id = get_sub_field('image_2');
				$class = get_sub_field('image_2_class');
			 
				teameight_singles_images($attachment_id, $size, $class);
			?>
		</div>
		<?php if( $row == 3 ){ ?>
		<div class="gi">
			<?php  
				$attachment_id = get_sub_field('image_3');
				$class = get_sub_field('image_3_class');
			 
				teameight_singles_images($attachment_id, $size, $class);
			?>
		</div>
		<?php } ?>
	</div>
	<?php endif; ?>
<?php endwhile; ?>