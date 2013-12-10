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
						<li><a href="http://github.com/teameight" class="github"><span class="genericon genericon-github"></span></a></li>
						<li><a href="http://www.linkedin.com/company/team-eight-llc" class="linkedin"><span class="genericon genericon-linkedin"></span></a></li>
						<li><a href="https://www.facebook.com/teameightrva" class="facebook"><span class="genericon genericon-facebook-alt"></span></a></li>
						<li><a href="https://twitter.com/shoutforthings" class="twitter"><span class="genericon genericon-twitter"></span></a></li>
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