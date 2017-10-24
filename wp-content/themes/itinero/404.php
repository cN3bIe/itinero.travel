<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php wp_head(); ?>
	<style>
		.topmenu .menu__item a.menu__link{color:#000;}
		header.header{float:left;width:100%;background:transparent;height:auto;}
		.block-404{
			background:url('<?php echo get_template_directory_uri(); ?>/img/404bg.jpg') bottom right no-repeat;
			-webkit-background-size: contain;
			background-size: contain;
			height:100%;
			position:relative;
		}
		html,body,#wrap{height:100%;}
		#wrap{padding-top:117px;}
		.description-404{text-align: center;}
		.description-404 span{color: #2F2F2F;text-align: center;letter-spacing: 1px;font-size: 32px;line-height: 38px;font-weight: 600;font-family: "MuseoSansBlack";display:block}
		.description-404 a{text-decoration:underline;}
		.text-404{color: #2F2F2F;text-align: center;letter-spacing: 1px;font-size: 162px;line-height: 194px;font-weight: 700;font-family: "MuseoSansBlack";}
		.info-404{width:400px;position:absolute;top: 0;bottom: 0;left: 15%;height:258px;margin:auto;}
	</style>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="row columns">
			<a href="/" class="wrap-a"><img src="<?php echo get_template_directory_uri(); ?>/img/black-crop-u1660.png" alt="" class="inlogo"></a>
			<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="menu menu--maria">
				<div class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></div>
				<ul class="topmenu menu__list">
					<li class="menu__item"><a class="menu__link fullpage-move" href="/#country" data-move="#country">Страны</a></li>
					<li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Блог</a></li>
					<li class="menu__item"><a class="menu__link fullpage-move" href="/#contacts" data-move="#contacts">Контакты</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div id="wrap">
		<div class="block-404">
			<div class="info-404">
				<div class="text-404">
					404
				</div>
				<div class="description-404">
					<span>ПОТЕРЯЛИСЬ?</span>
					Начните с <a href="/">главной страницы</a>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
