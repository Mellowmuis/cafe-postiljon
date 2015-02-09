<?php
/*
Template Name: menukaart
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
			<article class=" Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
				<h2 class="page-h2"><?php the_title(); ?></h2>
				
				<div class="content-padding menu-wrapper">
					<div class="menu-menukaart">
						<a class=" menu-menukaart-button menu1" href="#" >Lunchkaart</a>
						<a class=" menu-menukaart-button menu2" href="#" >Dinerkaart</a>
						<a class=" menu-menukaart-button menu3" href="#" >Drank</a>
					</div>
					<?php echo do_shortcode('[WP_Restaurant_Menu id="3"]'); ?>
					<?php echo do_shortcode('[WP_Restaurant_Menu id="4"]'); ?>
					<?php echo do_shortcode('[WP_Restaurant_Menu id="5"]'); ?>
					<?php the_content(); 
						$image1 = get_field('image1');
						$image2 = get_field('image2');
						$image3 = get_field('image3');
						$link1 = get_field('link-image1');
						$link2 = get_field('link-image2');
						$link3 = get_field('link-image3');
						$video = get_field('video');
						$button1 = get_field('button1');?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
			<div class="extension Content-entry content-page u-gridCol4">
					<article class="extender-in u-gridCol4">	
						<div class="side-right">
							<div class="">
								<?php if( !empty($button1) ): ?>
								<div class="buttonskin"><?php echo $button1; ?></div>
								<?php endif; ?>
							</div>
							<div>
								<?php if( !empty($image1) ): ?>
									<?php if( !empty($link1) ): ?>
										<a href="<?php the_field("link-image1")?>" ><p class="page-sidebar-right-image-title"><?php echo $image1['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
									<?php else: ?>
										<img  class="page-sidebar-right-img" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
									<?php endif; ?>	
								<?php endif; ?>
							</div>
							 <img class="heiniken" src="<?php echo get_stylesheet_directory_uri(); ?>/img/biervilter.png"/>
						</div>
					</article>	
			</div>	
			<?php endwhile; endif; ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
	