<?php
/**
 * The template for displaying the Accelerate about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="about-primary" class="home-page hero-content">
		<div class="main-content" role="main">
            <h3>Accelerate is a strategy and marketing agency <br> located in the heart of NYC.
				 Our goal is to build <br> businesses by making our clients visible and <br> making their customers smile.</h3>
			<?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
            <?php 
            $service_1= get_field('service_1');
            $description_1= get_field('description_1');
            $image_1=get_field('image_1');
            $service_2= get_field('service_2');
            $description_2= get_field('description_2');
            $image_2=get_field('image_2');
            $service_3= get_field('service_3');
            $description_3= get_field('description_3');
            $image_3=get_field('image_3');
            $service_4= get_field('service_4');
            $description_4= get_field('description_4');
            $image_4=get_field('image_4');
            $size='medium';
            ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<section class="services">
    <div class="service-content">
        <div class="service-blurb"> 
        <h5>OUR SERVICES</h5>
            <p>We take pride in our clients and the content we create for them.</p><p>Here's a brief overview of our offered services.</p>
        </div>
           <div class="service-list">
            <div class='about-strategy'>
                <div  class='strategy-image'>
                <?php echo wp_get_attachment_image ($image_1, $size ); ?>
                </div>
                <div class='about-sidebar-r'>
                <h5><?php echo $service_1; ?></h5>
                <p><?php echo $description_1; ?></p>
                </div>
            </div>
            <div class='about-influencer'>
                <div class='about-sidebar-l'>
                <h5><?php echo $service_2; ?></h5>
                <p><?php echo $description_2; ?></p>
                </div>
                <div class='influencer-image'>
                <?php echo wp_get_attachment_image ($image_2, $size ); ?>
                </div>
                
            </div>
            <div class='about-social-media'>
                <div class='social-media-image'>
                <?php echo wp_get_attachment_image ($image_3, $size ); ?>
                </div>
                <div class='about-sidebar-r'>
                <h5><?php echo $service_3; ?></h5>
                <p><?php echo $description_3; ?></p>
                </div>
            </div>   
            <div  class='about-design'>
                <div class='about-sidebar-l'>
                <h5><?php echo $service_4; ?></h5>
                <p><?php echo $description_4; ?></p>
                </div>
                <div class='design-image'>
                <?php echo wp_get_attachment_image ($image_4, $size ); ?>
                </div>
               </div>
        </div>  

    </div>
<div class="about-contact">
    <h3>Interested in working with us?</h3><a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
    </div>
</section>
<?php get_footer(); ?>
