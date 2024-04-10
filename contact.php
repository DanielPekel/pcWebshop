<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
    <div class="container my-3">
        <h2 class="font-weight-bold" style="color:#00ff08;"><?php the_title(); ?></h2>

        <div class="row">
            <div class="col-12 col-md-6" style="color:#00ff08;">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
            </div>
            <div class="col-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2419.868204526889!2d6.9003694158127855!3d52.662358079841454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7f0100be92607%3A0x43ab66b8dfa4a9bf!2sPrinsenhofweg+5%2C+7761+PR+Schoonebeek!5e0!3m2!1snl!2snl!4v1549626266396"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php get_footer(); ?>