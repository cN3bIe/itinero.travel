<?php get_header(); ?>

<div class="row columns text-center mb">
	<header>
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>
		<h2 class="tax-desc"><?php echo $term->description;?></h2>
	</header>
</div>
<style>
	<?php
	$mypod = pods('country',array('where'=>'t.term_id='.$term->term_id));
	$mypod->fetch();
	if($mypod->display('bg-image')) echo 'header.header{background-image: url('.$mypod->display('bg-image').');}';
	?>

	a.modal{display:block;}
	.center-text{text-align:center;}
	.center-text-item{display:inline-block;float:none !important;}
	.center-text-item:first-child{margin-left:-1%;}
	.center-text-item:last-child{margin-right: -1%;}
	.post{position:relative;}
	h3.title{position:absolute;left:20px;right:0;bottom:17px;color:#fff;
		text-align: left;
		letter-spacing: 2px;
		font-size: 24px;
		line-height: 29px;
		font-weight: 600;
	}
	.respon-item{
		width:100%;
		height:83vh;
		background: transparent center center no-repeat;
		background-size: cover;
	}
	.block-form{display: none;}
	input[type="submit"]{
		background: #8A7567;
		color: #fff;
		cursor:pointer;
	}
	input[type="submit"]:hover{
		background: #fff;
		color: #8A7567;
	}
	.wpcf7-form-control{
		width: 210px;
		height: 46px;
		color: #fff;
		text-decoration: none;
		text-transform: uppercase;
		font-size: 13px;
		letter-spacing: 2px;
		background: #756154;
		border: 1px solid #756154;
		display: inline-block;
		line-height: 45px;
		margin: 0 20px 0 0;
	}
	span.wrap-input input.wpcf7-form-control,
	span.wrap-input input.wpcf7-form-control:focus,
	span.wrap-input input.wpcf7-form-control:active{
		color: #000;
		background: transparent;
		border: 0;
		border-bottom: 1px solid #756154;
		box-shadow: none;
		text-transform: none;
	}
	.wpcf7-form-control{width:100%;vertical-align: bottom;}
	.wpcf7-form-control-wrap{ display: inline-block; width: 30%; margin-right: 3%;height:auto;}
	span.text_name {position: absolute;left: 23%;top: 25px;transition: all .2s ease;width: 100%;text-align:left;}
	span.wrap-input {
		position: relative;
		display: inline-block;
		margin-right: 3%;
		width: 19%;
	}
	span.text_name.active{top:-10px;left:0;font-size:0.8em;}
	span.text_name {
		position: absolute;
		left: 23%;
		top: 12px;
		transition: all .2s ease;
		width: 100px;
		text-align: left;
	}
	.wrap-input span.wpcf7-form-control-wrap {
		width: 100%;
	}
	span.wrap-input input {
		background: transparent;
		margin: 0;
	}
	.wpcf7-form-control-wrap {
		display: inline-block;
		width: 30%;
		height: auto;
	}
	input[type="submit"]{
		background:#756154;
	}
	input[type="submit"]:hover {
		background: #8A7567;
		color: #fff;
	}
	.visible-md{display:none;}
	.hidden-md{display:block;}
	@media(max-width:768px){
		.respon-item {width: 100%;height: 170px;}
		.mb {padding-top: 0;}
		.hidden-md{display:none;}
		.visible-md{display:block;text-align: center;margin: 16px;}
		.tax-name h1 {
			font-size: 46px;
		}
		.tur-cont {
			height:auto;
			overflow: hidden;
		}
		.header {
			height: 176px;
		}
	}
	@media(max-width:480px){
		.tbvpis,.tbskach {
			width: 100%;
			margin-bottom:10px;
		}
		span.wrap-input{
			width:100%;
			margin: 15px 0;
		}
		span.wpcf7-form-control-wrap {
			width: 100%;
			margin-top: 10px;
		}
	}
	.tur-cont {
		height: auto;
		overflow-y:auto;
		margin-bottom: 30px;
		padding-right: 20px;
	}
	.wrap_content{
		overflow:hidden;
	}
	.item-tab,.thank,.thank_vpis{display:none;}
	.item-tab.active{display:block;}
	.wrap-control-tab{text-align:center;}
	.item-control{background: #fff;color: #4e260f;display:inline-block;cursor:pointer;padding:10px 20px;border:1px solid #4e260f;line-height: 40px;font-size: 13px;letter-spacing: 2px;text-align: center;text-transform: uppercase;}
	.item-control:hover,
	.item-control.active{color:#fff;background: #4e260f;}
	.respon-item{height:600px;}
	@media(max-width:1400px){
		.respon-item{height:300px;}
	}
	.slick-next:before {
		content: '';
		position: absolute;
		right:0;
		top: 50%;
		margin-top: -10px;
		width: 20px;
		height: 20px;
		border: 3px solid rgba(255,255,255,.6);
		border-width: 3px 3px 0 0;
		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
	}
	.slick-prev:before {
		content: '';
		position: absolute;
		top: 50%;
		left: 0;
		margin-top: -10px;
		width: 20px;
		height: 20px;
		border: 3px solid rgba(255,255,255,.6);
		border-width: 3px 0 0 3px;
		-webkit-transform: rotate(-45deg);
		transform: rotate(-45deg);
	}
	.slick-next:hover:before,
	.slick-prev:hover:before {
		border-color: rgba(255,255,255,1);
	}
</style>

<div class="row columns center-text">
	<?php if ( have_posts() ) :
	/* Start the Loop */
	?><div class="wrap-control-tab">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="item-control" data-tab="#exampleModal8<?php the_ID(); ?>"><?php the_title(); ?></div>
	<?php endwhile; ?>
</div>
<div class="wrap-tab">
<a href="" class="download_file_link" download="Маршрут"></a>
<input class="download_file_link" type="hidden" value="">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php /*/ ?><div class="large-4 columns center-text-item">
		<a data-open="exampleModal8<?php the_ID(); ?>">
			<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post_thumbnail('square'); ?>
				<h3 class="title"><?php the_title(); ?></h3>
			</article><!-- #post-## -->
		</a>
	</div>
	<?php /*/ ?>
	<div class="full item-tab" id="exampleModal8<?php the_ID(); ?>">
		<?php $file=get_post_field('download_file');?>
		<input class="tur" type="hidden" value="<?php echo $term->name.',';the_title(); ?>">
		<input class="download_file" type="hidden" value="<?php echo $file['guid'];?>">
			<div class="row tmt expanded">
				<div class="large-12 columns tmtnopad">
					<div class="images-slider">
						<?php
						$images=get_field('photo');
						if($images){
							foreach($images as $key=>$item){
								if($item['image']){ ?><div class="respon-item" style="background-image:url(<?php echo $item['image'];?>);">&nbsp;</div><?php }
							}
						}
						?></div>
					</div>
					<div class="large-12 columns" style="margin-top:30px;">
						<?php /*/ ?><div class="visible-md">
							<div class="block-btn">
								<a href="#" class="tbvpis">вписаться</a>
								<a href="#" class="tbskach">скачать маршрут</a>
							</div>
							<div class="thank">Спасибо,мы скоро свяжемся с вами!</div>
							<div class="thank_vpis">Cпасибо, маршрут отправлен!</div>
							<div class="block-form block-form-1">
								<?php echo do_shortcode('[contact-form-7 id="192" title="Форма Вписаться"]');?>
							</div>
							<div class="block-form block-form-2">
								<?php echo do_shortcode('[contact-form-7 id="193" title="Форма Получить маршрут"]');?>
							</div>
						</div><?php /*/ ?>
						<div class="tur-cont">
							<h2 class="tur-title"><?php the_title(); ?></h2>
							<div class="wrap_content">
								<?php the_content(); ?>
							</div>
						</div>
					<?php /*/ ?>	<div class="hidden-md"><?php /*/ ?>
							<div class="block-btn">
								<a href="#" class="tbvpis">вписаться</a>
								<a href="#" class="tbskach">скачать маршрут</a>
							</div>
							<div class="thank">Спасибо,мы скоро свяжемся с вами!</div>
							<div class="thank_vpis">Cпасибо, маршрут отправлен!</div>
							<div class="block-form block-form-1">
								<?php echo do_shortcode('[contact-form-7 id="192" title="Форма Вписаться"]');?>
							</div>
							<div class="block-form block-form-2">
								<?php echo do_shortcode('[contact-form-7 id="193" title="Форма Получить маршрут"]');?>
							</div>
				<?php /*/ ?>		</div><?php /*/ ?>
					</div>
				</div>

	<?php /*/ ?>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php /*/ ?>
		</div>
	<? endwhile;
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif; ?>
</div>

</div>
<?php get_footer(); ?>