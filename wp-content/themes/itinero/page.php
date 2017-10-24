<?php get_header(); ?>

<div class="row columns text-center mb">
	<header>
		<h1 class="page-title screen-reader-text">ИНТЕРЕСНЫЕ ИСТОРИИ И СОВЕТЫ ИЗ ПУТЕШЕСТВИЙ</h1>
	</header>
</div>

<div class="row">
	<div class="large-9 columns">

		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

			endwhile; // End of the loop.
			?>

		</div>
		<div class="large-3 columns">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<?php get_footer(); ?>
