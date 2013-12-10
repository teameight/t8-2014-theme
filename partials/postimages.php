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
	<?php elseif(get_row_layout() == "text_only"): ?>
	<div class="freeform">
		<?php the_sub_field('text'); ?>
	</div>
	<?php elseif( get_row_layout() == "row2" || get_row_layout() == "row3" ): ?>
	<?php 
		$row = ( get_row_layout() == "row2" ? 2 : 3 ); 
		$imgsize = ( get_row_layout() == "row2" ? 'medium' : 'thumbnail' ); 
	?>
	<div class="g g-<?php echo $row; ?>up cf">
		<div class="gi">
			<?php  
				$attachment_id = get_sub_field('image_1');
				echo wp_get_attachment_image( $attachment_id, $imgsize );
			?>
		</div>
		<div class="gi">
			<?php  
				$attachment_id = get_sub_field('image_2');
				echo wp_get_attachment_image( $attachment_id, $imgsize );
			?>
		</div>
		<?php if( $row == 3 ){ ?>
		<div class="gi">
			<?php  
				$attachment_id = get_sub_field('image_3');
				echo wp_get_attachment_image( $attachment_id, $imgsize );
			?>
		</div>
		<?php } ?>
	</div>
	<?php endif; ?>
<?php endwhile; ?>