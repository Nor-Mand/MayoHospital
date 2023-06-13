<?php 
/**
 * Header Template.
 * 
 * @package Mayohospital
 * 
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-3">
                   <a href="<?php echo get_site_url() ?>"> <img src="<?php echo get_template_directory_uri();?>/assets/images/logotipo.png" alt="Logo Hospital"></a>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar navbar-expand-lg" id="Menu">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => "primary-menu",
                                    'container' => "div",
                                    'container_class' => "collapse navbar-collapse",
                                    'items_wrap'      => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
                                )
                            )
                            ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>