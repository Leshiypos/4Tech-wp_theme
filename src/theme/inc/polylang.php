<?php
add_action('init', function () {
	if (!function_exists('pll_register_string')) return;
	// footer
	pll_register_string('footer', 'разработка сайта', 'footer_section');
	// --- home_menu ---
	pll_register_string('home_templae', 'О нас', 'home_menu');
	pll_register_string('home_templae', 'Услуги', 'home_menu');
	pll_register_string('home_templae', 'Софт', 'home_menu');
	pll_register_string('home_templae', 'Оборудование', 'home_menu');
	pll_register_string('home_templae', 'Кибербезопасность', 'home_menu');
	pll_register_string('home_templae', 'Аутсорсинг', 'home_menu');
	pll_register_string('home_templae', 'Этапы', 'home_menu');
	pll_register_string('home_templae', 'Разработка', 'home_menu');
	pll_register_string('home_templae', 'Партнеры', 'home_menu');
	pll_register_string('home_templae', 'Решения', 'home_menu');
	pll_register_string('home_templae', 'Контакты', 'home_menu');

	// --- home_hero ---
	pll_register_string('home_templae', 'От оборудования до облачных серверов — все в одном месте', 'home_hero');
	pll_register_string('home_templae', 'Комплексные решение, для цифровой трансформации вашей компании', 'home_hero');
	pll_register_string('home_templae', 'От оборудования до облачных серверов', 'home_hero');

	// --- home_common ---
	pll_register_string('home_templae', 'Оставить заявку', 'home_common');
	pll_register_string('home_templae', 'Узнать больше', 'home_common');

	// --- home_about ---
	pll_register_string('home_templae', 'Ваш надежный поставщик<br />IT решений', 'home_about');
	pll_register_string('home_templae', 'Мы предоставляем нашему рынку все необходимые инструменты для оптимизаций и безопасности бизнес проектов: от IT оборудования до облачных серверов', 'home_about');
	pll_register_string('home_templae', 'Внедряем технологии, которые работают', 'home_about');
	pll_register_string('home_templae', 'Мы трансформируем ваш бизнес с помощью IT-решений: автоматизируем процессы, ускоряем работу сотрудников и минимизируем ошибки.', 'home_about');
	pll_register_string('home_templae', 'Это не просто цифровизация — это рост эффективности и снижение затрат с первого месяца.', 'home_about');
	pll_register_string('home_templae', 'Наша <br />миссия', 'home_about');
	pll_register_string('home_templae', 'Повысить эффективность клиентов за счет улучшения поддерживающей IT-инфраструктуры. Гарантией качественной работы является опыт и квалификация сотрудников, а также	отличное знание всего спектра предлагаемых услуг и продукции', 'home_about');
	pll_register_string('home_templae', 'Оставить заявк', 'home_about'); // как в шаблоне (строка разорвана)

	// --- home_services ---
	pll_register_string('home_templae', 'Все в одном <br> месте - от ПО <br> до облачных <br> серверов', 'home_services');
	pll_register_string('home_templae', 'У нас вы найдёте всё для построения эффективной IT-инфраструктуры: лицензионное программное обеспечение, облачные решения, серверное оборудование и техподдержку. Закрываем любые задачи — от простой поставки до комплексных проектов "под ключ"', 'home_services');

	// --- home_services_cards ---
	pll_register_string('home_templae', 'IT <br />услуги', 'home_services_cards');
	pll_register_string('home_templae', 'Поддержка бизнесв 24/7 в любой точке мира', 'home_services_cards');
	pll_register_string('home_templae', 'Комьютеры <br />и комплектующие', 'home_services_cards');
	pll_register_string('home_templae', 'Надёжная техника для стабильной работы вашей команды', 'home_services_cards');
	pll_register_string('home_templae', 'Серверное <br />оборудование', 'home_services_cards');
	pll_register_string('home_templae', 'Мощные решения для бесперебойной работы вашей инфраструктуры', 'home_services_cards');
	pll_register_string('home_templae', 'Системы хранения <br />данных', 'home_services_cards');
	pll_register_string('home_templae', 'Безопасное и масштабируемое хранение ваших данных', 'home_services_cards');

	// --- home_soft ---
	pll_register_string('home_templae', 'Предоставляем лицензионное ПО <br />для вашей компании', 'home_soft');
	pll_register_string('home_templae', '4tech является авторизированным партнером международных производителей программного обеспечения', 'home_soft');

	// --- home_catalog ---
	pll_register_string('home_templae', 'каталог', 'home_catalog');
	pll_register_string('home_templae', 'Компьютерное оборудование и ноутбуки', 'home_catalog');
	pll_register_string('home_templae', 'Серверное оборудование', 'home_catalog');
	pll_register_string('home_templae', 'Системы хранения данных', 'home_catalog');
	pll_register_string('home_templae', 'Безопасное и масштабируемое хранения ваших данных', 'home_catalog');
	pll_register_string('home_templae', 'Телекоммуникационное оборудование', 'home_catalog');
	pll_register_string('home_templae', 'Обеспечиваем стабильную и высокоскоростную связь для офиса, дата-центра или распределённой инфраструктуры', 'home_catalog');
	pll_register_string('home_templae', 'Смотреть больше', 'home_catalog');

	// --- home_protect ---
	pll_register_string('home_templae', 'Защищаем бизнес и данные <br />от цифровых угроз', 'home_protect');
	pll_register_string('home_templae', 'Обеспечиваем кибербезопасность на всех уровнях — от антивирусной защиты рабочих станций до комплексных систем предотвращения атак и утечек данных', 'home_protect');

	// --- home_outsourcing ---
	pll_register_string('home_templae', 'IT аутсорсинг', 'home_outsourcing');
	pll_register_string('home_templae', 'Берём на себя поддержку, обслуживание и администрирование —<br /> чтобы вы фокусировались на бизнесе, а не на сбоях.', 'home_outsourcing');
	pll_register_string('home_templae', 'техническая <br />поддержка ПК', 'home_outsourcing');
	pll_register_string('home_templae', 'Обеспечиваем бесперебойную работу рабочих мест, оперативно устраняем неполадки и обновляем системы.', 'home_outsourcing');
	pll_register_string('home_templae', 'Тех. обслуживание <br />серверного оборудования', 'home_outsourcing');
	pll_register_string('home_templae', 'Следим за стабильной работой серверов: мониторим, настраиваем и предотвращаем сбои до их возникновения.', 'home_outsourcing');
	pll_register_string('home_templae', 'администрирование <br />серверных приложений', 'home_outsourcing');
	pll_register_string('home_templae', 'Настраиваем, обновляем и сопровождаем системное ПО, чтобы ваши сервисы работали надёжно и без простоев.', 'home_outsourcing');

	// --- home_solution ---
	pll_register_string('home_templae', 'комплексное <br />решение', 'home_solution');
	pll_register_string('home_templae', 'Осуществляем решения «под ключ» для компаний. От изучения задач <br />и проблем клиента, до подбора оборудования, поставки и пусконаладки', 'home_solution');
	pll_register_string('home_templae', 'полный <br />аудит', 'home_solution');
	pll_register_string('home_templae', 'Проводим глубокую оценку текущей IT-инфраструктуры, выявляем	технические и бизнес-проблемы, определяем зоны риска и формируем основу для цифровой трансформации.', 'home_solution');
	pll_register_string('home_templae', 'создание <br />концепции', 'home_solution');
	pll_register_string('home_templae', 'Разрабатываем стратегический план развития IT-системы под задачи бизнеса: от архитектуры решений до оптимального набора технологий и инструментов.', 'home_solution');
	pll_register_string('home_templae', 'обоснование <br />внедрения IT', 'home_solution');
	pll_register_string('home_templae', 'Готовим обоснование с расчётами эффективности, сроков и бюджета внедрения. Согласовываем подходящие решения и прогнозируем результат в цифрах.', 'home_solution');
	pll_register_string('home_templae', 'внедрение <br />технологии', 'home_solution');
	pll_register_string('home_templae', 'Внедряем технологии с учётом всех этапов — поставка,	настройка, интеграция, обучение и поддержка. Гарантируем стабильную работу и измеримый эффект.', 'home_solution');

	// --- home_development ---
	pll_register_string('home_templae', 'Разрабатываем цифровые продукты и приложения', 'home_development');
	pll_register_string('home_templae', 'интеграции', 'home_development');
	pll_register_string('home_templae', 'Дизайн', 'home_development');
	pll_register_string('home_templae', 'Инструменты', 'home_development');

	// --- home_partners ---
	pll_register_string('home_templae', 'Наши партнеры', 'home_partners');
	pll_register_string('home_templae', 'Наши Клиенты', 'home_partners');

	// --- home_it_solutions ---
	pll_register_string('home_templae', 'Предлагаем IT решения для разных секторов экономики', 'home_it_solutions');
	pll_register_string('home_templae', 'здравоохранение', 'home_it_solutions');
	pll_register_string('home_templae', 'образование', 'home_it_solutions');
	pll_register_string('home_templae', 'государственный сегмент', 'home_it_solutions');
	pll_register_string('home_templae', 'медицина', 'home_it_solutions');
	pll_register_string('home_templae', 'горнорудная промышленность', 'home_it_solutions');
	pll_register_string('home_templae', 'агропромышенный комплекс', 'home_it_solutions');
	pll_register_string('home_templae', 'жилищно-коммунальные службы', 'home_it_solutions');
	pll_register_string('home_templae', 'сотовые операторы', 'home_it_solutions');
	pll_register_string('home_templae', 'банковский сектор', 'home_it_solutions');
	pll_register_string('home_templae', 'сфера услуг', 'home_it_solutions');

	// --- home_contacts ---
	pll_register_string('home_templae', 'введите ваш номер <br />телефона', 'home_contacts');
	pll_register_string('home_templae', 'Оставьте заявку, и мы подберем решения, которые повысят эффективность вашего бизнеса и сэкономят ресурсы за счет автоматизации. Все — под ключ и без лишней головной боли.', 'home_contacts');
	pll_register_string('home_templae', 'Введите корректный номер', 'home_contacts');
	pll_register_string('home_templae', 'Лет поставляем решения в сфере IT-технологий', 'home_contacts');
	pll_register_string('home_templae', 'Компаний-партнеров, известных по всему миру', 'home_contacts');
	pll_register_string('home_templae', 'Довольных и постоянных клиентов по всему миру', 'home_contacts');

	// --- Header ---
	pll_register_string('header', 'Оргтехника', 'links_page');
	pll_register_string('header', 'Лицензионное ПО', 'links_page');
	pll_register_string('header', 'Сетевое оборудование', 'links_page');
	pll_register_string('header', 'IT-услуги', 'links_page');
	pll_register_string('header', 'Сетевое оборудование', 'links_page');
	pll_register_string('header', 'IT-услуги', 'links_page');

	// --- equipment_page (ONLY new pll_e from Equipment template) ---

	// solution section (new title + description)
	pll_register_string(
		'equipment_solution_title',
		'комплексное решение по внедрению <br />IT архитектуры в вашу компанию',
		'equipment_solution'
	);

	pll_register_string(
		'equipment_solution_description',
		'Поломки техники, нехватка расходников, завышенные цены — мы решаем эти задачи.',
		'equipment_solution'
	);

	// solution section (new text)
	pll_register_string(
		'equipment_solution_audit_text',
		'Проводим глубокую оценку текущей IT-инфраструктуры, выявляем технические и бизнес-проблемы, определяем зоны риска и формируем основу для цифровой трансформации.',
		'equipment_solution'
	);

	// solution slider titles (ВНИМАНИЕ: эти варианты БЕЗ <br /> — их не было в старой регистрации)
	pll_register_string('equipment_solution_item_1_title_plain', 'полный аудит', 'equipment_solution');
	pll_register_string('equipment_solution_item_2_title_plain', 'создание концепции', 'equipment_solution');
	pll_register_string('equipment_solution_item_3_title_plain', 'обоснование внедрения IT', 'equipment_solution');
	pll_register_string('equipment_solution_item_4_title_plain', 'внедрение технологии', 'equipment_solution');

	// catalog section (new)
	pll_register_string('equipment_catalog_title', 'Каталог', 'equipment_catalog');
	pll_register_string('equipment_catalog_request_price', 'Запросить цену', 'equipment_catalog');

	// reviews section (new)
	pll_register_string('equipment_reviews_title', 'Отзывы клиентов', 'equipment_reviews');

	// whatsapp button (new)
	pll_register_string('equipment_form_write_in', 'Написать в', 'equipment_form');
});
