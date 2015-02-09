<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
	<div class="header-slider">
        <div class="u-gridContainer ">
            <div class="sliderboven-wrapper">
                <div class="sliderBoven"></div>
            </div>
                 <!-- Dit is de slider in de onderkant header -->
                    <div class="map-slider" id="map_canvas"></div>
                  <!-- einde slider van de onderkant header --> 
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
		<div class="home-mid">
			<div class="home-mid-wrapper u-gridContainer u-gridRow">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home u-gridCol12" id="post-<?php the_ID(); ?>">
					<div class="content-padding">
						<div class="adress-info">
								<p>cafe-postiljon</p>
								<p>Noordplein 101</p>
								<p>3035EC Rotterdam</p>
								<p>Email: hello@cafepostiljon.nl</p>
								<p>Tel: 0104651126</p>
						</div>
						<div class="formulierContact">
							<?php echo do_shortcode('[gravityform id=1 name=ContactUs title=false description=false]'); ?>
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
					</div>
				</article>
				
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
	<?php echo do_shortcode('[gravityform id=1 name=ContactUs title=false description=false]'); ?>


