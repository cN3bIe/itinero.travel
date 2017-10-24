<?php get_header(); ?>

<div class="row mt50">
	<div class="large-9 columns">
		страница тура
		<?php
		while ( have_posts() ) : the_post();

		the_content();


		endwhile; // End of the loop.
		?>

	</div>
	<div class="large-3 columns">

	</div>
</div>
<?php get_footer(); ?>