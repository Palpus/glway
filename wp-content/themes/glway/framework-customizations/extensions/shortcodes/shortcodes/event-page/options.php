<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
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
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Событие', 'fw' ),
		'popup-title'   => __( 'Добавить/Редактировать элемент', 'fw' ),
		'desc'          => __( 'Добавьте новый элемент', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_image' => array(
				'type'  => 'upload',
				'desc'  => __( 'Изображение события', 'fw' ),
				'label' => __( 'Загрузите изображение элемента', 'fw'),
				'help'  => __( 'В этом эдементе предполагается изображение-иконка', 'fw')
			),
			'tab_title' => array(
				'type'  => 'text',
				'label'  => __( 'Заголовок события', 'fw' )
			),
			'tab_content' => array(
				'type'  => 'wp-editor',
				'desc'  => __( 'Описание события', 'fw' ),
				'label' => __( 'Текст события', 'fw')
			),
			'tab_date' => array(
				'type'  => 'text',
				'label' => __( 'Дата события события', 'fw')
			),
		),
	)
);
