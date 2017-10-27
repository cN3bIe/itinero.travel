<div class="sc1-conv text-center">
	<div class="container-fluid wrap_block_test">
		<div class="item_stage start_item_stage">
			<p class="conv-txt">ПРОЙДИ ТЕСТ И УЗНАЙ, КАКОЕ ПУТЕШЕСТВИЕ ПОДОЙДЕТ ИМЕННО ТЕБЕ</p>
			<button id="btn_start_test" type="button" class="cnv-butt next ripplelink">Пройти тест</button>
		</div>

		<div class="item_stage">
			<p class="question">Вы мечтаете только о тропическом климате и водных видах спорта?</p>
			<p class="number-question">1/5</p>
			<div class="row">
				<button type="button" class="que-butt next" data-group="1" data-answer="1">Я люблю, когда жарко!</button>
				<button type="button" class="que-butt next" data-group="1" data-answer="2">Я люблю прохладy, жара меня утомляет!</button>
			</div>
		</div>

		<div class="item_stage">
			<p class="question">Вам интересны необычные люди и сложнодостижимые регионы нашей планеты?</p>
			<p class="number-question">2/5</p>
			<div class="row">
				<button type="button" class="que-butt next" data-group="2" data-answer="1">Мне интересны другие люди и их культура!</button>
				<button type="button" class="que-butt next" data-group="2" data-answer="2">Я предпочитаю отдыхать от людей в дикой природе!</button>
			</div>
		</div>

		<div class="item_stage">
			<p class="question">Вы мечтаете о национальных парках, дикой природе и походах без палатки?</p>
			<p class="number-question">3/5</p>
			<div class="row">
				<button type="button" class="que-butt next" data-group="3" data-answer="1">Я за активный отдых на природе!</button>
				<button type="button" class="que-butt next" data-group="3" data-answer="2">Мне больше нравятся новые города и комфорт!</button>
			</div>
		</div>

		<div class="item_stage">
			<p class="question">Вы рады вставать в 5 утра если день обещает начаться с интересной фотосъемки?</p>
			<p class="number-question">4/5</p>
			<div class="row">
				<button type="button" class="que-butt next" data-group="4" data-answer="1">фотография - ради красивых фотографий я готов вставать до рассвета!</button>
				<button type="button" class="que-butt next" data-group="4" data-answer="2">В отпуске я предпочитаю выспаться, а фотографии делаю на смартфон!</button>
			</div>
		</div>

		<div class="item_stage">
			<p class="question">Вам интересны направления где сохранились аутентичная культура и в то же время есть дикие национальные парки?</p>
			<p class="number-question">5/5</p>
			<div class="row">
				<button type="button" class="que-butt next" data-group="5" data-answer="1">Да, мне нравится все совместить в одном путешествии!</button>
				<button type="button" class="que-butt next" data-group="5" data-answer="2">Нет, мне нравится что-то одно!</button>
			</div>
		</div>

		<!-- Начало развертки-->
		<div class="block_country" id="block_1">
			<p class="question">Для путешествий вам подойдут Гавайи</p>
			<p class="wrap_text_center">На Гавайях определенно есть что-то для всех! У вас есть все шансы ослепнуть от красоты и в то же время , погрузить остальных в восхищенную зависть. Тропический климат, высокий уровень сервиса, безграничные возможности для треккинга, снорклинга и водных видов спорта.</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Гавайи">
				<a href="<?php echo get_template_directory_uri();?>/download/Gavayi_Itinero.pdf" class="download_pdf hidden" download="Gavayi_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_2">
			<p class="question">Для путешествий вам подойдет Бразилия</p>
			<p class="wrap_text_center">Бразилия это идеальный баланс между экзотикой и тропическим климатом. Мы все слышали про капоэйру, самбу, кайпиринью, футбол и жизнерадостных бразильцев! Но так же это страна с огромным разнообразием природы и выбором активных видов спорта! пакуйтесь налегке, в этой жаркой стране зашкаливает не только температура но и уровень активности путешествия!</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Бразилия">
				<a href="<?php echo get_template_directory_uri();?>/download/Brazilia_Itinero.pdf" class="download_pdf hidden" download="Brazilia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_3">
			<p class="question">Для путешествий вам подойдет Индонезия</p>
			<p class="wrap_text_center">Это страна активных вулканов, глубоких джунглей, это колыбель всех земных корралов и крышесносный мир дикой природы!<br>- встречать рассвет с видом на идеальной формы активный вулкан Бромо<br>- треккинг к кислотному озеру в кратере вулкана Иджен и наблюдение за синим горением газа на Яве</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Индонезия">
				<a href="<?php echo get_template_directory_uri();?>/download/Indonezia_Itinero.pdf" class="download_pdf hidden" download="Indonezia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_4">
			<p class="question">Для путешествий вам подойдет Боливия</p>
			<p class="wrap_text_center">Это страна расширяющая горизонты восприятия! Страна не подходящая для массового туризма, которая умеет удивлять. Здесь нанду гоняются за лисами, птички киви перекликаются с пуку-пуку, розовые фламинго заполонили берега разноцветных лагун, а ламы, викуньи и альпаки гордо позируют на фоне вулканов.</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Боливия">
				<a href="<?php echo get_template_directory_uri();?>/download/Chili_Bolivia_Itinero.pdf" class="download_pdf hidden" download="Chili_Bolivia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_5">
			<p class="question">Для путешествий вам подойдет Непал</p>
			<p>Непал - это яркое смешение буддистских храмов, пагод, богато украшенных религиозными памятниками, резной деревянной архитектурой Катманду, хаотичными улочками и величественных Гималаев. Страна является родиной десяти объектов Всемирного наследия ЮНЕСКО и разрывается по швам от культурных и природных чудес.</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Непал">
				<a href="<?php echo get_template_directory_uri();?>/download/Nepal_Itinero.pdf" class="download_pdf hidden" download="Nepal_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_6">
			<p class="question">Для путешествий вам подойдет Перу</p>
			<p class="wrap_text_center">Пожалуй одна из ярчайших стран Южной Америки таит в себе множество сюрпризов. Богатая история оставила в наследство интереснейшие артефакты доколумбовых цивилизаций, такие как гигантские линии Наски или подземный храм Чавин де Уантар. Пирамиды Чан чан построенные культурой Чиму.<br>В эпицентре внимания находятся один из красивейших комплексов - Мачу Пикчу, древний инский город, куда можно добраться пешком по живописным инкским тропам либо на поезде с панорамными видами Священной Долины</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Перу">
				<a href="<?php echo get_template_directory_uri();?>/download/Peru_Itinero.pdf" class="download_pdf hidden" download="Peru_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_7">
			<p class="question">Для путешествий вам подойдет Патагония</p>
			<p class="wrap_text_center">Самые сильные ветра в Южной Америке дуют в восточной Патагонии, в то время как в западной части раскинулся cамый красивый тропические лес на планете.<br>Изумительная красота природы в которой сочетаются невероятные пики гор, лес, ледники, степи, луга,  изумрудные озера и реки будет поражать своим величием , куда бы вы не пошли.</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Патагония">
				<a href="<?php echo get_template_directory_uri();?>/download/Patagonia_Itinero.pdf" class="download_pdf hidden" download="Patagonia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_8">
			<div class="bg"></div>
			<p class="question">Для путешествий вам подойдет Патагония</p>
			<p class="wrap_text_center">Самые сильные ветра в Южной Америке дуют в восточной Патагонии, в то время как в западной части раскинулся cамый красивый тропические лес на планете.<br>Изумительная красота природы в которой сочетаются невероятные пики гор, лес, ледники, степи, луга,  изумрудные озера и реки будет поражать своим величием , куда бы вы не пошли.</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Патагония">
				<a href="<?php echo get_template_directory_uri();?>/download/Patagonia_Itinero.pdf" class="download_pdf hidden" download="Patagonia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_9">
			<p class="question">Для путешествий вам подойдет Колумбия</p>
			<p class="wrap_text_center">Вы хотите попасть в страну с европейской культурой, приключениями как в Коста-Рике, атмосферой вечеринок Греции, красотой как на  Аляске, пляжами Карибского моря и самыми дружелюбными, самыми счастливыми, самыми привлекательными людьми в Южной Америке?  Тогда это Колумбия, новое направление в туризме!</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Колумбия">
				<a href="<?php echo get_template_directory_uri();?>/download/Brazilia_Itinero.pdf" class="download_pdf hidden" download="Brazilia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_10">
			<p class="question">Для путешествий вам подойдет Эквадор</p>
			<p class="wrap_text_center">Эквадор охватывает четыре совершенно разных мира. От бесконечных просторов Амазонки, захватывающей красоты Анды, до нетронутых побережий  и пляжей до легендарных Галапагосских островов - каждый регион может похвастаться уникальным ландшафтом, экосистемой и культурой. Нигде на земле посетители не могут испытывать такое огромное разнообразие в одной стране.</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Эквадор">
				<a href="<?php echo get_template_directory_uri();?>/download/Brazilia_Itinero.pdf" class="download_pdf hidden" download="Brazilia_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<div class="block_country" id="block_11">
			<p class="question">Для путешествий вам подойдет Перу</p>
			<p class="wrap_text_center">Пожалуй одна из ярчайших стран Южной Америки таит в себе множество сюрпризов. Богатая история оставила в наследство интереснейшие артефакты доколумбовых цивилизаций, такие как гигантские линии Наски или подземный храм Чавин де Уантар. Пирамиды Чан чан построенные культурой Чиму.<br>В эпицентре внимания находятся один из красивейших комплексов - Мачу Пикчу, древний инский город, куда можно добраться пешком по живописным инкским тропам либо на поезде с панорамными видами Священной Долины</p>
			<p class="question" style="margin-top:10px;">Получите детальный маршрут в PDF</p>
			<div class="form">
				<input class="name_tur" type="hidden" value="Перу">
				<a href="<?php echo get_template_directory_uri();?>/download/Peru_Itinero.pdf" class="download_pdf hidden" download="Peru_Itinero">&nbsp;</a>
				<?php echo do_shortcode( '[contact-form-7 id="94" title="Форма обратной связи для"]' ); ?>
			</div>
		</div>

		<!-- Конец развертки-->
		<!-- Начало Заключительнй блок-->
		<div class="block_country" id="end_test">
			<a href="/#country" class="que-butt fullpage-move" data-move="#country">посмотреть другие маршруты</a>
			<p class="question">или</p>
			<button type="button" class="que-butt" id="reset_test">Пройти тест еще раз</button>
		</div>
		<!-- Конец Заключительнй блок-->
	</div><!-- .container-fluid -->

</div><!-- .sc1-conv -->