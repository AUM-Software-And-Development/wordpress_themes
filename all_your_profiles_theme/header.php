
<!-- Start of header.php -->

<!-- Wordpress will find this on its own due to the name of the object -->

<!DOCTYPE html>

<html <?= language_attributes(); ?>>
<head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Additional wp_head() functions to return other functions -->
    <?= wp_head(); ?>
    <!-- End wp_head() autofill functions -->
</head>

<body <?= body_class("body-class"); ?>>

    <header class="php">
    
        <section class="welcoming_cards">
            <div class="welcoming_card_1">
                <h1> <a href="<?= bloginfo('url'); ?>"> <?= bloginfo('name'); ?> </a></h1>
                <p><?= bloginfo('description'); ?></p>
            </div>
    
            <div class="welcoming_card_2">
                <h2>Test header</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus consequuntur temporibus ad officia rem id quod, error assumenda dolorem eveniet repellendus? Necessitatibus nulla voluptate, fuga aliquid ab inventore voluptas aliquam?</p>
            </div>
        </section>

        <div class="directional_flexed_items">
            <section class="blog_button">
                <button>Drop Down</button>
            </section>

            <section class="logos">
                <img src="<?php bloginfo('template_directory'); ?>/images/styled_rock.png" alt="Your browser did not display this image of a rock." />
            </section>
        </div>
    
    </header>

    <section class="site_indexes">
        <div class="site_index_list">
            <ul>
                <li><a href="#">View All</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Reddit</a></li>
            </ul>
        </div>
    </section>

<!-- End of header.php -->
