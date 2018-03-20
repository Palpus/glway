<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type'  => 'text',
		'label'  => __( 'Заголовок блока', 'fw' )
	),
	'image' => array(
		'type'  => 'upload',
		'desc'  => __( 'Изображение блока', 'fw' ),
		'label' => __( 'Загрузите изображение элемента', 'fw'),
		'help'  => __( 'В этом эдементе предполагается изображение-иконка', 'fw')
	),
	'title2' => array(
		'type'  => 'text',
		'label'  => __( 'Заголовок блока', 'fw' )
	),
	'content' => array(
		'type'  => 'wp-editor',
		'label'  => __( 'Контент блока', 'fw' ),
		'size'  => 'large',
		'editor_height' => 700,
	),
	
);