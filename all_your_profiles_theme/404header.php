<!-- Start of 404header.php -->

<!-- ****This is a required file in the 404.php object**** -->

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
        <h1> <a href="<?= bloginfo('url'); ?>"> <?= bloginfo('name'); ?> </a></h1>
        <h2> <?= bloginfo('description'); ?></h2>
        <br>
        <br>
        <br>
        <h3>The page you tried doesn't exist. Try something else.</h3>
    </header>

<!-- End of 404header.php -->
