<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aboutus
 */

get_header();
?>
	<div class="container-fluid">
			<div class="containerutama">
				<div class="container-left">
                    <div class="isi-container">
					<h1>Who is alterra?</h1>
					<p>alterra is the leading B2B tech company in Indonesia that provides a wide range of services such as Bill Payment Aggregator, Distribution Network, Promotion Platform, and Tech Academy.</p>
                    </div>
				</div>
				<div class="container-right">
				<img src="/wp-content/themes/aboutus/assets/img/about_alterra@2x.png" width="420" alt="Image" class="at-img-full">
                    <img class="batik" src="/wp-content/themes/aboutus/assets/img/batik2.svg" width="420" alt="Image" class="at-img-full">
				</div>
			</div>
	</div>

<?php

get_footer();
