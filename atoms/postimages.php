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
			 
			echo wp_get_attachment_image( $attachment_id, $size );
		?>
	<?php elseif(get_row_layout() == "image_and_text"): ?>
	<div class="imgdesc cf">
		<?php  
			$attachment_id = get_sub_field('image');
			$size = "large";
			 
			echo wp_get_attachment_image( $attachment_id, $size );
		?>
		<div class="desc">
			<div class="text">
				<?php the_sub_field('text'); ?>
			</div>
		</div>
	</div>	
	<?php endif; ?>
<?php endwhile; ?>