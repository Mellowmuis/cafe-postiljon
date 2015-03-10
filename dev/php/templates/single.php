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
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test2.jpg" />
                    </div> 
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test6.jpg" />
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
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test4.jpg"/>
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
	<div class="home-wrapper singelPost-wrapper"> 
	
		<div class="home-mid ">
			<div class="home-mid-wrapper u-gridContainer u-gridRow">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content  u-gridCol12" id="post-<?php the_ID(); ?>">
		
						<div class="agenda-padding">
							<div class="agenda-wrapper">
								<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
										<h2><?php the_title(); ?></h2>
										<div class="content-singlePost">
											<?php the_content(); ?> 
											<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
											<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
										</div>
									</article>
									
									<nav>
										<div><?php previous_post_link('&laquo; %link') ?></div>
										<div><?php next_post_link('%link &raquo;') ?></div>
									</nav> 

									<?php comments_template(); ?>
								<a class="terug" href="/evenementen/" >Terug naar evenementen</a>
									
								</article>
							</div>
					</article>
				<?php endwhile; else: ?>

					<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

				<?php endif; ?>
			</div>
		</div>
	</div>
 
<?php get_footer(); ?> 
