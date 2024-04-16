<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
    <div class="container my-3">
        <h2 class="font-weight-bold" style="color:#00ff08;"><?php the_title(); ?></h2>

        <div class="row">
            <div class="col-12 col-md-6" style="color:#00ff08;">
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>
            </div>
            <div class="col-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2415.823240933862!2d6.481997076456013!3d52.73538197211839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c81a8b88cd5035%3A0xcef15f130fa55ae7!2sAlfa-college%2C%20locatie%20Voltastraat%20Hoogeveen!5e0!3m2!1snl!2snl!4v1713302314531!5m2!1snl!2snl"
                        width="100%" height="450" style="border:0;" allowfullscreen frameborder="0"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
<?php get_footer(); ?>