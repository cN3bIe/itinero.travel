<?php get_header(); ?>

<div class="row columns text-center mb">
	<header>
		<h1 class="page-title screen-reader-text">ИНТЕРЕСНЫЕ ИСТОРИИ И СОВЕТЫ ИЗ ПУТЕШЕСТВИЙ</h1>
	</header>
</div>

<div class="row">
	<div class="large-9 columns">
		<?php
		if ( have_posts() ) : ?>

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
			<div class="large-3 columns">
			<?php get_sidebar(); ?>
			</div>
		</div>
		<?php get_footer(); ?>
