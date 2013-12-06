<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
?>

		</div><!-- #main -->
		<footer id="colophon"  class="footer" role="contentinfo">
			<div class="wrap">
				<div class="left">
					<h4>Lurk Us</h4>
					<ul class="nav-social">
						<li><a href="#" class="github">GitHub</a></li>
						<li><a href="#" class="linkedin">LinkedIn</a></li>
						<li><a href="#" class="facebook">Facebook</a></li>
						<li><a href="#" class="twitter">Twitter</a></li>
					</ul>
				</div>
				<div class="right">
					<form action="#" method="post" class="inline-form newsletter-form">           
					    <fieldset>
						    <h4>Keep Up</h4>
						    <div class="inline-container">
						   		<input type="newsletter" placeholder="your e-mail..." id="newsletter-field" class="newsletter-field" />
						    	<button class="newsletter-submit">Subscribe</button>
							</div>
					    </fieldset>
					</form>
				</div>
			</div>
			<div class="bott">
				<div class="wrap">
					<p class="copyright">&copy; <?php echo date('Y'); ?> Team Eight. All rights reserved.</p>
				</div>
			</div>
		</footer>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>