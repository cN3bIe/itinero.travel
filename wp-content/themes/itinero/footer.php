<div class="slider-cart">
	<h2 style="text-transform:uppercase;margin:21px 0;line-height: 1;text-align: center;">Календарь путешествий</h2>
	<div id="slider-cart" class="block-maps-contacts">
		<?php
		$mypod = pods('tur',array('orderby'=>'year_tur.meta_value','where'=>'year_tur.meta_value>"'.date('Y-m-d').'"'));
		while($mypod->fetch()):
			$country=array_shift(get_the_terms($mypod->field('id'), 'country'));
		?>
		<div class="item-cart">
			<a class="a-wrap-contant" href="/country/<?php echo $country->slug;?>/">
				<div class="block-img">
					<div class="bg-section" style="background-image: url(<?php echo $mypod->field('post_thumbnail_url.full');?>);"></div>
				</div>
				<p class="text-country"><?php echo $country->name;?></p>
				<p class="text-country"><span><?php echo $mypod->display('name');?></span></p>
			</a>
		</div>
	<?php endwhile; ?>
</div>
</div>
</div>

<style>
	.footer .fa {margin-left: 15px;font-size: 1.2em;}
	a{color: #000;}
	.footer-title{float:left;}
	.footer a span,.footer a{display:inline-block;height: 40px;line-height: 40px; }
	.block-dev{display:inline-block;background: url('<?php echo get_template_directory_uri(); ?>/img/u1753.png') center center no-repeat;height: 40px;width: 69px;vertical-align: bottom;}
	a:hover, .footer .fa:hover{color: #756154;}
	a:hover .block-dev {background: url('<?php echo get_template_directory_uri(); ?>/img/u1753-r.png') center center no-repeat;}
	html, body { height: 100%; }
	#wrap{min-height: 100%;box-sizing: border-box; -moz-box-sizing: border-box;padding-bottom: 50px;}
	footer{height: 50px;margin-top: -50px;}
	.block-info-contacts{float: right;}
	.block-info-contacts {text-align:right;}
	.block-info-contacts a{margin-right:50px;}


	@media(max-width:480px){
		.footer-title {
			float: none;
			text-align: center;
		}
		.block-info-contacts {text-align: center; float: none; width: 100%;}
		.block-info-contacts a{margin-right:0;}
	}
	#secondary form, .subscribe form {
		margin:0;
	}
</style>

<footer class="footer">
	<div class="section" id="contacts">
		<section class="screen9 footer">
			<div class="row">
				<div class="large-12 columns">
					<div class="footer-title">
						&copy; itinero.travel
						<?php if(get_theme_mod('social_vk')):?><a target="_blank" href="<?php echo get_theme_mod('social_vk'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif;?>
						<?php if(get_theme_mod('social_fb')):?><a target="_blank" href="<?php echo get_theme_mod('social_fb'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif;?>
						<?php if(get_theme_mod('social_inst')):?><a target="_blank" href="<?php echo get_theme_mod('social_inst'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif;?>
					</div>
				</div>
			</div>
		</section>
	</div>
</footer>
<?php wp_footer(); ?>
<script>
	/*
	$('#slider-cart').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1024,
			settings: {slidesToShow: 4,slidesToScroll: 1}
		},
		{
			breakpoint: 768,
			settings: {slidesToShow: 3,slidesToScroll: 1}
		},
		{
			breakpoint: 480,
			settings: {slidesToShow: 1,slidesToScroll: 1}
		}
		]
	});
	var back_vpis=function(){
		if($('a.download_file_link').first().attr('href')) $('a.download_file_link')[0].click();
		// $.fileDownload();
		// $('#download_file_link').attr('src',$('input.download_file_link').val());
		$('.block-form').hide();
		$('.thank_vpis').show();
		setTimeout(function(){
			$('.thank_vpis').hide();
			$('.block-btn').show();
		},2000);
	},
	back=function(){
		$('.block-form').hide();
		$('.thank').show();
		setTimeout(function(){
			$('.thank').hide();
			$('.block-btn').show();
		},2000);
	},
	send=function(){
		back();
	};
	$(document).ready(function(){
		$('input[name="tur"]').each(function(){
			var wrap=$(this).parents('.item-tab');
			$(this).val(wrap.find('.tur').val());
		});
		$('input[type="submit"]').click(function(){
			var wrap=$(this).parents('.item-tab');
			$('a.download_file_link').attr({'href':wrap.find('.download_file').val(),'download':wrap.find('.download_file').val().replace(/http.*\//,'').replace(/\..*//*,'')});
			$('input.download_file_link').val(wrap.find('.download_file').val());
		});
		$('.tbvpis').click(function(){
			$(this).parents('.block-btn').hide();
			$('.block-form-1').show();
			return !1;
		});
		$('.tbskach').click(function(){
			$(this).parents('.block-btn').hide();
			$('.block-form-2').show();
			return !1;
		});
	});*/
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter44377948 = new Ya.Metrika({
					id:44377948,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/social-share-kit/js/social-share-kit.min.js"></script>
<noscript><div><img src="https://mc.yandex.ru/watch/44377948" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
