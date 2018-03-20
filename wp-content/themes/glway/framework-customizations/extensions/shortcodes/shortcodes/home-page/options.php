<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'youtube' => array(
		'type'   => 'text',
		'label'  => __( 'Ссылка на фрейм с ютуба', 'fw' ),
		'desc'   => __( 'Введите ссылку', 'fw' ),
		'help'  => __ ( 'Зайдите на видео в ютубе, скопируйте с помощью правой кнопки мыши скрипт и вставьте', 'fw'),
	),
	'head' => array(
		'type'   => 'text',
		'label'  => __( 'Заголовок секции', 'fw' ),
		'desc'   => __( 'Введите заголовок секции', 'fw' ),
	),
	'desc' => array(
		'type'   => 'textarea',
		'label'  => __( 'Введите текст под заголовком', 'fw' ),
	),
	'image' => array(
		'type'  => 'upload',
		'desc'  => __( 'Загрузите сюда изображение', 'fw' ),
	),
);