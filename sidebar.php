				<div id="header-sidebar" class="sidebar" role="complementary">
				
					<div class="inner-wrap">
				
						<!-- <h3 class="sidebar-title"></h3> -->
	
						<?php if ( is_active_sidebar( 'main-sidebar' ) ) {
	
								dynamic_sidebar( 'main-sidebar' );
							
								} else {
								
						?>
	
							<!-- This content shows up if there are no widgets defined in the backend. -->
	
							<div class="alert alert-help">
							
								/*****************<br />
								SIDEBAR IS HERE! <br />
								NO ACTIVE WIDGETS<br />
								*****************/
								
							</div>
	
						<?php } ?>
						
					</div>

				</div>