<?php

/**
 *Template Name: Frontpage
 *
 * @package OnePress
 */



get_header(); ?>

<div id="content" class="site-content">
	<main id="main" class="site-main" role="main">

		<!-- ZERO VAT extra section -->
		<div class="container" style="padding:5rem 0">

			<!-- sub-title -->
			<div class="section-title-area">
				<h5 class="section-subtitle">This is your opportunity</h5>
				<h2 class="section-title">Fight back against 'High Energy Bills'</h2>
			</div>

			<!-- brief description -->
			<div class="section-desc extra-smooth">
				<p>We install certain energy efficiency products at <span style="background-color: #0033cc; font-weight: 500; padding: 2px 5px; color: white;">0% VAT on insulation and installation</span> - we specialize in roof insulation and if you were considering making some changes to reduce those rising energy bills, now could be the time!</p>
				<p style="padding:1rem 0rem; text-align: center">
					<a href="zero-vat-energy-efficiency-savings" class="btn btn-theme-primary btn-md">Find out more</a>
				</p>
			</div>
		</div>

		<?php

		do_action('onepress_frontpage_before_section_parts');

		if (!has_action('onepress_frontpage_section_parts')) {

			$sections = apply_filters('onepress_frontpage_sections_order', array(
				'features', 'about', 'services', 'videolightbox', 'gallery', 'counter', 'team',  'news', 'contact'
			));

			foreach ($sections as $section) {
				/**
				 * Load section if active
				 *
				 * @since 2.1.1
				 */
				if (Onepress_Config::is_section_active($section)) {
					onepress_load_section($section);
				}
			}
		} else {
			do_action('onepress_frontpage_section_parts');
		}

		do_action('onepress_frontpage_after_section_parts');

		?>


	</main>
</div>

<?php get_footer(); ?>