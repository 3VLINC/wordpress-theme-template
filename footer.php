		</div> <!-- end #container -->
			
		<footer id="site-footer" role="contentinfo">

			<div id="inner-footer" class="">

				<nav role="navigation" class="footer-nav">
				
					<?php wp_nav_menu( array('theme_location' => 'footer' )); ?>

				</nav><!-- end .footer-nav -->

				<div class="copyright">
				
					<p>&copy; <?php echo date('Y'); ?> - thissite.com</p>
				
				</div><!-- end .copyright -->

			</div> <!-- end #inner-footer -->

		</footer> <!-- end #site-footer -->

		<!-- all js scripts are loaded in library/js -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->