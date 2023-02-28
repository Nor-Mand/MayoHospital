<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-2">
                    <img src="" alt="Logo Hospital">
                </div>
                <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg" id="Menu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => "primary-menu",
                                'container' => "div",
                                'container_class' => "collapse navbar-collapse",
                                'items_wrap'      => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
                                // 'menu_class'      => 'menu-wrapper',
                                // 'container_class' => 'primary-menu-container',
                            )
                        )
                        ?>
                </nav>
                </div>
            </div>
        </div>
    </header>