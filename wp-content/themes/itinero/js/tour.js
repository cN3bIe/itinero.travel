var block_id,
end_test=function(){
	$('.item_stage,.block_country').slideUp();
	$('#end_test').slideDown();
	$(block_id).find('a.download_pdf')[0].click();
	yaCounter44377948.reachGoal('SentTestResult');
	yaCounter44377948.reachGoal('Sent');
	//ga('send', 'event', 'Form', 'SentTestResult');
	//ga('send', 'event', 'Form');
	dataLayer.push({'event': 'SentTestResult'});
}
$(document).ready(function(){
	var result=[],
	get_id_country=function(id){
		$('.name_tur').each(function(){
			var wrap=$(this).parents('.block_country');
			wrap.find('input[name="tur"]').val($(this).val());
		});
		switch(id){
			case '12222':return 'block_1';break;
			case '21111':return 'block_2';break;
			case '12121':return 'block_3';break;
			case '21212':return 'block_4';break;
			case '12221':return 'block_5';break;
			case '21112':return 'block_6';break;
			case '12211':return 'block_7';break;
			case '21122':return 'block_8';break;
			case '11222':return 'block_9';break;
			case '22111':return 'block_10';break;
			default: return 'block_11';break;
		}
	};
	$('.next').click(function(){
		// $('.bg2,.about').hide();
		$('.ind4 .about').hide();
		var btn=$(this);
		if(btn.data('group')){
			result[btn.data('group')]=btn.data('answer');
		}
		var next_slide=btn.parents('.item_stage').slideUp().next('.item_stage');
		next_slide=next_slide.length?next_slide:$(block_id='#'+get_id_country(result.join('')));
		next_slide.slideDown();
	});
	$('#reset_test').click(function(){
		result=[];
		$('.item_stage,.block_country').slideUp();
		$('.start_item_stage').slideDown();
	});
	$('#btn_start_test').click(function(){
		yaCounter44377948.reachGoal('TestStart');
		//ga('start', 'event', 'Test', 'TestStart');
		dataLayer.push({'event': 'TestStart'});
	});

	$("#mc4wp-form-1").submit(function(){
		yaCounter44377948.reachGoal('SentMailForm');
		yaCounter44377948.reachGoal('Sent');

		//ga('send', 'event', 'Form', 'SentQuestion');
		//ga('send', 'event', 'Form');
		dataLayer.push({'event': 'News'});
	});

});