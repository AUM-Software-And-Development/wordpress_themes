
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
        <h1> <a href="<?= bloginfo('url'); ?>"> <?= bloginfo('name'); ?> </a></h1>
        <h2> <?= bloginfo('description'); ?></h2>
    </header>

<!-- End of header.php -->
