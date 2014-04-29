				<article id="blog-sidebar" class="sidebar" role="complementary">
				
					<div class="inner-wrap">
				
						<h3 class="sidebar-title">Sidebar Title</h3>
	
						<?php if ( is_active_sidebar( 'blog-sidebar' ) ) {
	
								dynamic_sidebar( 'blog-sidebar' );
							
								} else {
								
						?>
	
							<!-- This content shows up if there are no widgets defined in the backend. -->
	
							<div class="alert alert-help">
							
								/*****************<br />
								SIDEBAR IS HERE! <br />
								NO ACTIVE WIDGETS<br />
								*****************/
								
							</div><!-- end .alert -->
	
						<?php } ?>
						
					</div><!-- end .inner-wrap -->

				</article><!-- end article -->