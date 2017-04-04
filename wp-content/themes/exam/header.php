<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="head-search-form">
					<?php get_search_form(); ?>
				</div>
				<div class="head-menu">
					<a href="#" id="touch-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
					<nav>
						<ul class="nav clearfix">
							<li><a href="#">Home</a></li>
							<li><a href="#">Post Types</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">