<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main-page-tab' => array(
		'title'   => __( 'Главные настройки', 'glway' ),
		'type'    => 'tab',
		'options' => array(
			'setting-box' => array(
				'title'   => __( 'Настройки', 'glway' ),
				'type'    => 'box',
				'options' => array(
					'enter' => array(
						'label' => __( 'Ссылка кнопки "Войти"', 'glway' ),
						'desc'  => __( 'Вставьте сюда ссылку', 'glway' ),
						'type'  => 'text'
					),
					'agreement' => array(
						'label' => __( 'Ссылка кнопки "Войти"', 'glway' ),
						'desc'  => __( 'Вставьте сюда ссылку', 'glway' ),
						'type'  => 'wp-editor'
					),
					'social-box' => array(
						'title'   => __( 'Социальный сети', 'glway' ),
						'type'    => 'box',
						'options' => array(
							'vk'    => array(
								'label' => __( 'Вконтакте', 'glway' ),
								'desc' => __('Введите ссылку', 'glway'),
								'type'  => 'text',
							),
							'inst'    => array(
								'label' => __( 'Инстаграм', 'glway' ),
								'desc' => __('Введите ссылку', 'glway'),
								'type'  => 'text',
							),
							'facebook'    => array(
								'label' => __( 'Фейсбук', 'glway' ),
								'desc' => __('Введите ссылку', 'glway'),
								'type'  => 'text',
							),
							'twitter'    => array(
								'label' => __( 'Твиттер', 'glway' ),
								'desc' => __('Введите ссылку', 'glway'),
								'type'  => 'text',
							),
							'youtube'    => array(
								'label' => __( 'Ютуб', 'glway' ),
								'desc' => __('Введите ссылку', 'glway'),
								'type'  => 'text',
							),
						)
					),
				)
			),
		)
	)
);
