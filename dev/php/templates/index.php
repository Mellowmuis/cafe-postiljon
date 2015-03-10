
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
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test.jpg" >
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test1.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test2.jpg" />
                    </div>
                     <div>
                        <img  class="header-onderkant-slider-image"src="<?php echo get_stylesheet_directory_uri(); ?>/img/test4.jpg" />
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
<div class="home-wrapper index-wrapper "> 
	
	<div class="evenement-wrapper">
		<div class="home-mid-wrapper u-gridContainer u-gridRow">
	
			<article class="Content Content--home u-gridCol12 index-padding" id="post-<?php the_ID(); ?>">
				<div class="agenda-wrapper">
					<h2 class="page-h2">Evenementen</h2>
					<div class="">
						<?php if (have_posts()) : ?>

							<?php while (have_posts()) : the_post(); ?>

								<article class="blogpost" <?php post_class() ?> id="post-<?php the_ID(); ?>">
									<h2 class="blogtitleh2"><?php the_title(); ?><span class="blogtitle"></span></h2>
									<div class="pblog"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
									<a class="buttonskinblog" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Lees meer</a>
								</article>

							<?php endwhile; ?>

							<nav>
								<div><?php next_posts_link('&laquo; Older Entries') ?></div>
								<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
							</nav>

						<?php else : ?>

			<h2>Not Found</h2> 
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>

		<?php endif; ?>
					</div>
				</div>
			</article>
			
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
