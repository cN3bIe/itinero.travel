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
			<?php the_content();?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
<div class="row columns text-center share-post">
	<p>Понравилась история? Поделись с друзьями в социальных сетях</p>
</div>
<style>
	.ssk.ssk-icon{color:#000;}
	.ssk.ssk-icon:hover{color:#756154;}
	.wrap-shark-icon{text-align:center;}
</style>
<div class="wrap-shark-icon">
<div class="ssk-group">
	<a href="" class="ssk ssk-icon ssk-facebook"></a>
	<a href="" class="ssk ssk-icon ssk-twitter"></a>
	<a href="" class="ssk ssk-icon ssk-google-plus"></a>
	<a href="" class="ssk ssk-icon ssk-vk"></a>
</div>
</div>
<?php if ( comments_open() || get_comments_number() ) :
	comments_template();
	endif; ?>
