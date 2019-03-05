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
			<div class="milestone">
				<div class="milestone-container">
					<div class ="image-left">
						<img src="/wp-content/themes/aboutus/assets/img/about_milestone@2x.png" width="472" alt="Image" class="at-img-full">
						<div class="text-right">
							<h1>Milestone</h1>
							<p>The company has established since 2015 under the name Sepulsa, then it evolved as the pioneer of digital bill payment services, enabling top online players in Indonesia. It also served as technology enabler for offline to online (O2O) distribution network for Telco Industries, helping thousands of telco agents across Indonesia to get better use of technology for their business.</p>
						</div>
					</div>
					
				</div>
				
				</div>
	</div>

<?php

get_footer();
