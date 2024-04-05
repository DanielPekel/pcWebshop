<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
?>
<!DOCTYPE html>
<html>
<head>

    <title><?PHP bloginfo( 'name' ); ?> | <?Php echo basename(get_permalink());?></title>
    <meta name="copyright" content="<?php date( 'Y' ); ?> - <?PHP bloginfo( 'name' ); ?>">
    <meta name="author" content="<?PHP bloginfo( 'name' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://profi-web.nl/icon/styles.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/main/main.css" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js"></script>
	<?php wp_head(); ?>
       <script src="https://kit.fontawesome.com/2962338799.js" crossorigin="anonymous"></script>
</head>
<style>
    .navbar-light .navbar-nav .nav-link{
        color:white!important;
    }
</style>
<body <?php body_class(); ?> style="background-color:#000000;">

<div class="d-none d-md-block bg-black">
    <nav class="navbar navbar-expand-md navbar-light bg-black p-2" id="desktop_menu" role="navigation"
         style="padding-top: 0 !important;">
        <div class="container">

            <div class="row justify-content-between w-100 ">
                <div class="col-md-3">
                    <div class="row h-100 align-items-center">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="Websitenaam" width="200px" height="100%"
                             class="fit-contain">
                    </a>
                    </div>
                </div>

                <div class="col-md-9 pt-2">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'depth' => 3,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-end text-center',
                        'container_id' => 'firstNav',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>
            </div>
        </div>

    </nav>
</div>

<!--Mobile menu-->
<div class="pl-2 pt-2 d-block d-md-none py-3">
<a href="<?php echo get_site_url(); ?>">
    <img src="<?php echo $image[0]; ?>" alt="Websitenaam" width="200px" height="100%"
         class="fit-contain">
</a>
</div>
<div class="sidebar d-block d-md-none">
    <div class="container-fluid w-100" id="open_mobile">
        <div class="row justify-content-end">
            <div class="button-menu closemenu"><i class="far fa-times-circle" style="color: white !important;"></i></div>
        </div>
    </div>
    <nav class="navbar navbar-expand p-0" role="navigation" id="mobile_menu">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse in text-left text-white bg-transparant',
                'container_id' => 'main-menu-header-sub',
                'menu_class' => 'nav navbar-nav flex-column w-100',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>
</div>
<div class="container-fluid  position-absolute w-100 d-block d-md-none" id="open_mobile">
    <div class="row justify-content-end">
        <div class="button-menu openmenu "><i class="fas fa-bars"></i></div>
    </div>
</div>

<div class="closeoutclick">
