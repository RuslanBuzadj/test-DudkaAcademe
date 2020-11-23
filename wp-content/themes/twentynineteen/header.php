<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <header class="header" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/images/header-bg.png);">
            <div class="container">
                <nav class="header__navigation nav">
                    <a href="#" class="nav__logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo.png" alt="">
                    </a>
                    <ul class="nav__menu">
                        <li><a href="#">What we do</a></li>
                        <li><a href="#">Our work </a></li>
                        <li><a href="#">seo insights</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                    <div class="header__burger">
                        <span></span>
                    </div>
                </nav>
                <div class="header__offer offer">
                    <div class="offer__content">
                        <h1 class="offer__title">
                            Workforce Survey
                        </h1>
                        <div class="offer__text">
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi 
                            </p>
                        </div> 
                        <div class="offer__btn">
                            <a href="#" class="btn btn-red">
                                Start Now
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
        </header>


