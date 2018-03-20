<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main-page-tab' => array(
		'title'   => __( 'Главная страница', 'tualet-voda' ),
		'type'    => 'tab',
		'options' => array(
			'setting-box' => array(
				'title'   => __( 'Настройки', 'tualet-voda' ),
				'type'    => 'box',
				'options' => array(
					'map' => array(
						'label' => __( 'Карта', 'tualet-voda' ),
						'desc'  => __( 'Вставьте сюда скрипт для вставки карты', 'tualet-voda' ),
						'type'  => 'textarea'
					)
				)
			),
		)
	),
	'header-tab' => array(
		'title'   => __( 'Шапка', 'tualet-voda' ),
		'type'    => 'tab',
		'options' => array(
			'phone'    => array(
				'label' => __( 'Телефон', 'tualet-voda' ),
				'desc' => __('Введите телефон(Оберните в span  для выделения цветом)', 'tualet-voda'),
				'type'  => 'text',
			),
		)
	),
	'footer-tab' => array(
		'title'   => __( 'Подвал', 'tualet-voda' ),
		'type'    => 'tab',
		'options' => array(
			'logo-box' => array(
				'title'   => __( 'Лого-футер', 'tualet-voda' ),
				'type'    => 'box',
				'options' => array(
					'logofooter' => array(
						'label' => __( 'Логотип в подвале', 'tualet-voda' ),
						'desc'  => __( 'Загрузите изображение для отображения логотипа', 'tualet-voda' ),
						'type'  => 'upload'
					)
				)
			),
			'adress-box' => array(
				'title'   => __( 'Адрес', 'tualet-voda' ),
				'type'    => 'box',
				'options' => array(
					'town'    => array(
						'label' => __( 'Город', 'tualet-voda' ),
						'type'  => 'text',
					),
					'address'    => array(
						'label' => __( 'Адрес', 'tualet-voda' ),
						'type'  => 'text',
					),
				)
			),
			'social-box' => array(
				'title'   => __( 'Социальный сети', 'tualet-voda' ),
				'type'    => 'box',
				'options' => array(
					'vk'    => array(
						'label' => __( 'Вконтакте', 'tualet-voda' ),
						'desc' => __('Введите ссылку', 'tualet-voda'),
						'type'  => 'text',
					),
					'inst'    => array(
						'label' => __( 'Инстаграм', 'tualet-voda' ),
						'desc' => __('Введите ссылку', 'tualet-voda'),
						'type'  => 'text',
					),
					'facebook'    => array(
						'label' => __( 'Фейсбук', 'tualet-voda' ),
						'desc' => __('Введите ссылку', 'tualet-voda'),
						'type'  => 'text',
					),
					'twitter'    => array(
						'label' => __( 'Твиттер', 'tualet-voda' ),
						'desc' => __('Введите ссылку', 'tualet-voda'),
						'type'  => 'text',
					),
				)
			),
		)
	)
);