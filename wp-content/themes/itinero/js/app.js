$(document).ready(function(){

	if($(window).width()>768){
		$('.menu-country').hover(function(){
			$('.bg_black,.list-country').addClass('active');
		},function(){
			$('.bg_black,.list-country').removeClass('active');
		})
	}
	$('.menu-country-mb').click(function(){
		$('.list-country').toggleClass('active');
		if($(window).width()<=768) return !1;
	});
	if($('.ssk').length) SocialShareKit.init();
	var hash=location.hash;
	if($(window).width()>768){
		$('#fullpage').fullpage();
		history.pushState('', document.title, window.location.pathname);
	}
	if(hash && $(window).width()>768){
		$.fn.fullpage.moveTo($('.section').index($(hash))+1);
		$('a.menu__link[href="/'+hash+'"]').parents('.menu__item').addClass('menu__item--current').siblings('.menu__item').removeClass('menu__item--current');
	}
	$(document).foundation()

	$('.reveal').on('opened', function(){
		$(window).trigger('resize');
	});

	/*меню гамбургер*/
	if($(window).width()<=768){

		$('.menu-toggle').click(function(){
			$('.menu.menu--maria').fadeIn();
		});
		$('.close-menu').click(function(){
			$('.menu.menu--maria').fadeOut();
		});
		$('.menu.menu--maria .menu__item').click(function(){
			$('.menu.menu--maria').fadeOut();
		});
	}
	/* ./меню гамбургер*/

	$('#wrap').width($(window).width());
	$('.responsive').slick({
		prevArrow:'#cn3bie_prev',
		nextArrow:'#cn3bie_next',
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
	/*Для моадбльного окна (ширина при инициализации)*/
	$('.images-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1
	});
	$('.item-control').click(function(){
		/*Делается задержка, ибо я не знаю какое событие при инициализации у модального окна фондейшена*/
		setTimeout(function(){
			$('.images-slider').slick('reinit');
		},200);
	});
	$('.move-name').click(function(){
		$(this).parents('.wrap-input').find('.text_name').addClass('active');
	}).focusout(function(){
		if(!$(this).val()) $(this).parents('.wrap-input').find('.text_name').removeClass('active');
	});
	$('input').change(function(){
		$(this).removeClass('error');
	});
	$('.close-button').click(function(){
		back();
	});
	$('.fullpage-move').click(function(){
		$.fn.fullpage.moveTo($('.section').index($($(this).data('move')))+1);
		$(this).parents('.menu__item').addClass('menu__item--current').siblings('.menu__item').removeClass('menu__item--current');
		return !1;
	});
	/*Блок страны*/
	var left_btn, right_btn;
	var count_tour=$('.respon-item').not('.slick-cloned').length;
	var action_left_btn=function(){
		left_btn=$('.screen6 .slick-active').first().prev();
		$(this).find('.block_view').attr('src',left_btn.css('background-image').replace(/(url\(|\)|\")/g,''));
		$(this).find('.text_view').text(left_btn.find('.ri-func span').text()+' '+left_btn.data('number'));
	},
	action_right_btn=function(){
		right_btn=$('.screen6 .slick-active').last().next();
		$(this).find('.block_view').attr('src',right_btn.css('background-image').replace(/(url\(|\)|\")/g,''));
		$(this).find('.text_view').text(right_btn.find('.ri-func span').text()+' '+right_btn.data('number'));
	};
	if($(window).width()<=768) $('.slider_next').click();
	$('.slider_prev').click(action_left_btn).hover(action_left_btn);
	$('.slider_next').click(action_right_btn).hover(action_right_btn);
	/* ./Блок страны*/
	$('.block-people').hover(function(){
		$('.block-people').removeClass('active');
		$($(this).data('name')).addClass('active').siblings('.block_text').removeClass('active');
		$(this).addClass('active');
	});
});
$('.item-control').click(function(){
	back();
	$('.thank').hide();
	$('.item-control').removeClass('active');
	$(this).addClass('active');
	$('.item-tab').not($(this).data('tab')).slideUp(function(){
		$(this).removeClass('active');
	});
	$($(this).data('tab')).slideDown(function(){
		$(this).addClass('active');
	});
}).first().addClass('active');
$('.item-tab').first().slideDown(function(){
	$(this).addClass('active');
});
/*function initMap() {
	var style = [
	{"featureType": "all", "elementType": "labels.text.fill", "stylers": [{"saturation": 36 }, {"color": "#000000"}, {"lightness": 40 } ] },
	{"featureType": "all", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16 } ] },
	{"featureType": "all", "elementType": "labels.icon", "stylers": [{"visibility": "off"} ] },
	{"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}, {"lightness": 20 } ] },
	{"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#000000"}, {"lightness": 17 }, {"weight": 1.2 } ] },
	{"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 20 } ] },
	{"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 21 } ] },
	{"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}, {"lightness": 17 } ] },
	{"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#000000"}, {"lightness": 29 }, {"weight": 0.2 } ] },
	{"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 18 } ] },
	{"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 16 } ] },
	{"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 19 } ] },
	{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 17 } ] }
	];

	var m_z = 17;
	var latitude = 55.848674,
	longitude = 37.597633,
	map_zoom = m_z;
	var marker_url = '/wp-content/themes/itinero/img/123.png';
	var map_options = {
		center: new google.maps.LatLng(latitude, longitude),
		zoom: map_zoom,
		panControl: false,
		zoomControl: false,
		mapTypeControl: false,
		streetViewControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		styles: style
	};
	var styledMapType = new google.maps.StyledMapType(style, {name: 'Styled Map'});

	var map = new google.maps.Map(document.getElementById('map'), map_options);
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(latitude, longitude),
		map: map,
		visible: true,
		icon: marker_url
	});
}*/
