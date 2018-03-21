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
					'map' => array(
						'label' => __( 'Ссылка кнопки "Войти"', 'glway' ),
						'desc'  => __( 'Вставьте сюда ссылку', 'glway' ),
						'type'  => 'text'
					)
				)
			),
		)
	)
);
