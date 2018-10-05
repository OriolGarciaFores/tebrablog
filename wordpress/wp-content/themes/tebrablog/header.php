<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap v3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="banner" class="banner">
<!-- PARALLAX -->
</header>
<nav class="navbar navbar-inverse navbar-fixed-top" <?php if (is_admin_bar_showing()) echo 'style="margin-top:32px;"' ?>>
    <div class="container">
        <?php wp_nav_menu(array(
            'theme_location' => 'top',
            'container' => 'div',
            'container_class' => 'navbar-collapse collapse',
            'menu_class' => 'nav navbar-nav'
        )); ?>
    </div>
</nav>

