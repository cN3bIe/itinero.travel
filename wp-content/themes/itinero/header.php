<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/social-share-kit/css/social-share-kit.css">
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GWJ8HC');</script>
<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
	<style>
		body.tax-country header.header .topmenu a{color:#000;}
		.inlogo {width: 86px;}
		body.tax-country header.header .topmenu a {
			color: #fff;
		}
		body.tax-country header.header .topmenu a:hover{
			color: #756154;
		}
		@media(max-width:768px){
			/* .inlogo{width: 50px;} */
		}
	</style>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '1263834287078771');
			fbq('track', 'PageView');
		</script>
		<noscript>
			<img height="1" width="1"
			src="https://www.facebook.com/tr?id=1263834287078771&ev=PageView
			&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
		<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-112024-6w0ni';</script>

	</head>

	<body <?php body_class(); ?>>
		<div id="wrap">
			<header class="header">
				<div class="row columns">
					<a href="/" class="wrap-a" style="position: absolute;"><img src="<?php echo get_template_directory_uri(); ?>/img/imgpsh_fullsize.png" alt="" class="inlogo"></a>
					<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<nav class="menu menu--maria">
						<div class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></div>
						<ul class="topmenu menu__list">
							<li class="menu__item menu-country">
							<a class="menu__link fullpage-move menu-country-mb" href="/#country" data-move="#country">Страны</a>
								<ul class="list-country">
									<?php $country = pods('country',array());
									while($country->fetch()){?>
									<li class="item-country"><a class="menu__link" href="/country/<?php echo $country->field('slug');?>/"><?php echo $country->field('name');?></a></li>
									<?php } ?>
								</ul>
							</li>
							<li class="menu__item"><a class="menu__link" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Блог</a></li>
							<li class="menu__item"><a class="menu__link fullpage-move" href="/#contacts" data-move="#contacts">Контакты</a></li>
							<li class="menu__item"><a class="menu__link" href="/calendar/">Календарь путешествий</a></li>
							<li><div class="bg_black"></div></li>
						</ul>
					</nav>
				</div>
				<?php
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				if($term->name){?>
				<div class="tax-name">
					<?php echo '<h1>'. $term->name .'</h1>'; ?>
				</div>
				<?php }?>
			</header>
