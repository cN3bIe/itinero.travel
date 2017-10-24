

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail('wide-post'); ?>
	<div class="eh-left">
		<div class="month">
			<div class="day">
				<?php the_time('d'); ?>
			</div>
			<?php the_time('M'); ?>
		</div>
	</div>
	<div class="eh-right">
		<header class="entry-header">
			<p class="ptags">
				<?php $posttags = get_the_tags();
				if ($posttags) {
					foreach($posttags as $tag) {
						echo '#' . $tag->name . '&#160;&#160;';
					}
				}
				?>
			</p>
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content archmar">
			<?php echo trim_characters(380, '...'); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
