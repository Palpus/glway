<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type'  => 'text',
		'label'  => __( 'Заголовок продукта', 'fw' )
	),
	'sub_title' => array(
		'type'  => 'text',
		'label'  => __( 'Подзаголовок продукта', 'fw' )
	),
	'image' => array(
		'type'  => 'upload',
		'desc'  => __( 'Изображение продукта', 'fw' ),
		'label' => __( 'Загрузите изображение элемента', 'fw'),
		'help'  => __( 'В этом эдементе предполагается изображение-иконка', 'fw')
	),
	'title2' => array(
		'type'  => 'text',
		'label'  => __( 'Второй заголовок', 'fw' )
	),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Бизнес', 'fw' ),
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
				'type'  => 'textarea',
				'desc'  => __( 'Описание бизнеса', 'fw' ),
				'label' => __( 'Текст бизнеса', 'fw')
			),
		),
	)
);