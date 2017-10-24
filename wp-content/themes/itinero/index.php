<?php get_header(); ?>


<div class="row columns text-center mb">
	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) : ?>
	<header>
		<h1 class="page-title screen-reader-text">ИНТЕРЕСНЫЕ ИСТОРИИ И СОВЕТЫ ИЗ ПУТЕШЕСТВИЙ</h1>
	</header>

	<?php
	endif; ?>
</div>

<div class="row">
	<div class="large-9 columns">

		<?php while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;
				endif; ?>

				<?php the_posts_pagination(); ?>
			</div>
			<div class="large-3 columns">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php get_footer(); ?>

