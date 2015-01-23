<?php
/*
Template Name: landingspage
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
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.jpg" >
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/5.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/6.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/7.jpg"/ >
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/8.jpg"/>
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
					<?php the_content(); 
						$image1 = get_field('image1');
						$image2 = get_field('image2');
						$image3 = get_field('image3');
						$link1 = get_field('link-image1');
						$link2 = get_field('link-image2');
						$link3 = get_field('link-image3');
						$video1 = get_field('video1');
						$button1 = get_field('button1');?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
			<div class="extension Content-entry content-page u-gridCol4">
					<article class="extender-in u-gridCol4">	
						<div class="side-right">
							<div class="">
								<video class="page-sidebar-right-img"   width="320" height="240"  controls> 	<source src="/wp-content/themes/slate-0.3.1_cafe-postiljon/img/Postiljon.mp4"  type="video/mp4"> 						  <source src="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/themes/slate-0.3.1_cafe-postiljon/img/Postiljon.ogv" type="video/ogg"> 							Your browser does not support the video tag. 					</video>
							</div>
							<div>
									<div class="buttonskin"><a href="/contact/">Neem contact op</a></div>
							</div>
							<div>
								<?php if( !empty($image1) ): ?>
									<?php if( !empty($link1) ): ?>
										<a href="<?php the_field("link-image1")?>" ><p class="page-sidebar-right-image-title"><?php echo $image1['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
									<?php else: ?>
										<img  class="page-sidebar-right-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.jpg"/>
									<?php endif; ?>	
								<?php endif; ?>
							</div>
							<div>
								<?php if( !empty($image2) ): ?>
									<?php if( !empty($link2) ): ?>
										<a href="<?php the_field("link-image2")?>" ><p class="page-sidebar-right-image-title"><?php echo $image2['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
									<?php else: ?>
										<img  class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/>
									<?php endif; ?>	
								<?php endif; ?>
							</div>
							<div>
								<?php if( !empty($image3) ): ?>
									<?php if( !empty($link3) ): ?>
										<a href="<?php the_field("link-image3")?>" ><p class="page-sidebar-right-image-title"><?php echo $image3['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/></a>
									<?php else: ?>
										<img  class="page-sidebar-right-img" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/>
									<?php endif; ?>	
								<?php endif; ?>
							</div>
							<div>
								<?php if( !empty($image4) ): ?>
									<?php if( !empty($link4) ): ?>
										<a href="<?php the_field("link-image4")?>" ><p class="page-sidebar-right-image-title"><?php echo $image4['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"/></a>
									<?php else: ?>
										<img  class="page-sidebar-right-img" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"/>
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
	