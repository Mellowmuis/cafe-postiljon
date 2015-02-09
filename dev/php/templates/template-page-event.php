<?php
/*
Template Name: page-event
*/
?>

<?php get_header(); ?>
<div class="header-slider">
        <div class="u-gridContainer ">
            <div class="sliderboven-wrapper">
                <div class="sliderBoven"></div>
            </div>
                <div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                    <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.jpg" >
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/gebouw.png" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/5.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.png" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/7.jpg"/ >
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/8.jpg"/>
                    </div>
                    <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/5.png"/>
                    </div>
                    <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/6.png"/>
                    </div>
                    <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.png"/>
                    </div>
                </div>   <!-- einde slider van de onderkant header --> 
                <div class="slideronder-wrapper"> 
                <img class="walkingbier" src="<?php echo get_stylesheet_directory_uri(); ?>/img/walkingbier.png"/> 
                    <div class="sliderOnder"></div>
                </div>
            </div>
        </div>
        <div class="sliderborder-bottom">
        </div>
</div> <!-- einde slider -->
<div class="home-wrapper"> 
	
	<div class="home-mid">
		<div class="home-mid-wrapper u-gridContainer u-gridRow">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
				<h2 class="page-h2"><?php the_title(); ?></h2>
				<div class="content-padding">
					<?php the_content();  ?>
						
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/6.png"/ >
				</div>
			</article>
			<div class="extension Content-entry content-page u-gridCol4">
					<article class="extender-in-2">	
						<div class="side-right2">
							
							<div>
								<?php echo do_shortcode('[gravityform id="3"]'); ?>
							</div>
							
						<img class="heiniken-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/biervilter.png"/>	 
						</div>
					</article>	
					
			</div>	
			<?php endwhile; endif; ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
	