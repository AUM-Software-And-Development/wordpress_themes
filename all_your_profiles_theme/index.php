<!-- Copyright 2021 Eric Dee. All rights reserved. -->

<?= get_header(); ?>

<!-- End of index.php header calls -->

<!-- Start of index.php content functionality -->

<main class="php">

<!-- End of index.php sidebar calls -->

<?php
    echo '<section class="php_wordpress_posts">';

        // To allow loading of additional posts change Settings > Reading > 'Blog pages show at most'.
        if (have_posts()):

            while (have_posts()):
            
                // Iterates through each post, and calls its fetch method to use its data
                the_post();

                echo '<article '; post_class(); echo ' ';
                echo "id='post_"; the_ID(); echo "'>";
            
                echo '<div class="flex">';
                echo '<a href="'; the_permalink(); echo '">';
                the_title();
                echo '</a>';

                echo '<div class="post_metadata">';
                echo 'Post date '; echo get_the_date(); echo '_'; echo get_the_time();
                echo '</div> ';
                echo '</div>';

                the_excerpt();
                // the_content();
            
                echo '<div class="post_footer">';
                echo '<span> Author: '; echo get_the_author(); echo '</span>';
                echo '</div> ';

                echo '</article>';

            Endwhile;
        
        Endif;
    
    echo '</section>';
?>

<?= get_sidebar(); ?>

</main>
<?= get_footer(); ?>

<!-- End of index.php -->
