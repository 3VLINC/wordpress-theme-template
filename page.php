<?php get_header(); ?>	
		
			<div id="content">

				<div id="inner-content">
				
				<?php 
					// loop starts
					
					if ( have_posts() ) {
					
						while ( have_posts() ) {
							
							the_post(); 
								
				?>	
				
					<div id="page-header">
					
						<h1><?php the_title(); ?></h1>
						
					</div><!-- end #page-header -->
												
						<div id="main" role="main">
						
							<div class="inner-wrap">

									<div class="entry-content">
										
										<?php the_content(); ?>
						
									</div><!-- end .entry-content" -->
								
							</div><!-- end .inner-wrap -->
							
						</div><!-- end #main -->
							
				<?php 
						
						} // end while
	
					} // end if
				
				?>
				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>