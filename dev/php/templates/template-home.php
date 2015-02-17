<?php
/*
Template Name: Homepage
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
</div>
<div class="home-wrapper">
	
	<div class="home-mid2">
		<div class="u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--home u-gridCol9" id="post-<?php the_ID(); ?>">
				<h2 class="home-h2">Welkom bij cafe/brasserie Postiljon</h2>
				<div>
					<?php the_content(); ?> 
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
			<artcicle class="u-gridCol3">
				 <img  class="jaar"src="<?php echo get_stylesheet_directory_uri(); ?>/img/postiljon-30jaar.png" /> 
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div> 
	<div class="home-bottom">
		<div class="u-gridContainer u-gridRow">
				<article class="home-content u-gridCol3 home-content home-content-1"> 
					<div class="home-content-img img1"></div>
					<a class="home-content-a"href="/verhuur/">Zalenverhuur</a>
				</article>
				<article class="home-content u-gridCol3 home-content home-content-2">
					<div class="home-content-img img2"> </div>
					<a class="home-content-a" href="/evenementen/">Evenementen</a>
				</article>
				<article class="home-content u-gridCol3 home-content home-content-3">
					<div class="home-content-img img3"></div>
					<a class="home-content-a" href="/menukaart/">Menukaart</a>
				</article>
				<article class="home-content u-gridCol3 home-content home-content-4">
					<div class="home-content-img img4"></div>
					<a class="home-content-a" href="/agenda/">Agenda</a>
				</article>
		</div>
	</div>
</div> 

<?php get_footer(); ?>
