<!-- These are just notes written by the Theme Developer (Eric) #
    
<h1><?= the_title(); ?></h1>

<h2><?= 

// Instructs php to get the blog data from the database ("user friendly")
// Wordpress stores it all via MySQL in such a way that this can get sections to build the site.
bloginfo("description");

?></h2>

<h3><a href="<?= bloginfo("url"); ?>">Return.</a></h3> -->

<!-- The admin object is assigned to the footer. There are many pieces of metadata included in the
base assumption of the original object. Changing it with a custom one cleans the HTML -->

<!--
--
--
--
--
-->

<?= get_header(); ?>

<!-- End of index.php header calls -->

<!-- Start of index.php content functionality -->

<main class="php">

<!-- End of index.php sidebar calls -->

<?php
    echo '<section class="php_wordpress_posts">';

        // To allow more posts to load, change the Settings item in Reading called 'Blog pages show at most'.
        if (have_posts()):

            while (have_posts()):
            
                // First fetch the post data in order to tie the delegates
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

                // the_excerpt();
                the_content();
            
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
