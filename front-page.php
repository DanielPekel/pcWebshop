<?php get_header(); ?>
    <div class="container">
        <div class="row mx-0 px-0">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 6,
                'orderby' => 'name',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                global $product;
//                echo '<br /><a href="' . get_permalink() . '">' . woocommerce_get_product_thumbnail() . ' ' . get_the_title() . '</a>';
                ?>
                <div class="col-12 col-md-4 my-3 productcard">
                    <a href="<?php echo get_permalink();?>">
                        <div class="container text-center">
                            <div class="container pt-3">
                                <img width="100%" height="auto" src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                            </div>
                            <div class="container pt-3">
                                <h4 style="color:black;"><?php echo the_title(); ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            endwhile;

            wp_reset_query();
            ?>
        </div>
    </div>
<?php get_footer(); ?>