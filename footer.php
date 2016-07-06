<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>

		<div id="colophon-content">
			<div id="footer-contact"><a id="contact-link" href="#">Click here to Contact</a></div>

			<div id="footer-social">
				<a id="linkedin" href="https://www.linkedin.com/in/donna-agajanian-28999532" target="_blank"></a>
				<a id="facebook" href="https://www.facebook.com/ChangeHappensCoaching" target="_blank"></a>
				<img src="<?php get_home_url() ?>/~changeh8/wp-content/uploads/2016/05/icflogowhite-copy.png" alt="International Coach Federation logo">
			</div>

			<div id="footer-copyright"><p>&copy; <?php echo date ( 'Y' ); ?>. All Rights Reserved.</p></div>

<!-- 			<div id="legal-links">
				<a href="http://77.104.139.80/~changeh8/disclaimer/">Disclaimer</a>
				<a href="http://77.104.139.80/~changeh8/privacy-policy/">Privacy Policy</a>
				<a href="http://77.104.139.80/~changeh8/terms-of-use/">Terms of Use</a>
			</div>
 -->			<p id="devcred">Site development by <a href="http://lisajaynewells.com/">Lisa Wells</a></p>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
