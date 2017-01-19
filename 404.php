<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops!', 'twentyseventeen' ); ?></h1>
					<p class="page-info"><?php _e ('We couldn&rsquo;t build that page.', 'twentyseventeen'); ?></p>
				</header><!-- .page-header -->
				<div class="page-content">
	    		<img src="http://localhost:8888/wordpress_TCI/wp-content/uploads/2017/01/plan.jpg">
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
