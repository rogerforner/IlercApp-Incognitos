<?php

/*
| ------------------------------------------------------------------------------
| Página de la "Política de Cookies"
| ------------------------------------------------------------------------------
| Código generado por ACF Pro.
| Ha sido adaptado para traducciones.
|
*/

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5b3d104887ebb',
		'title' => __('Legal - Cookies', 'incognitos'),
		'fields' => array(
			array(
				'key' => 'field_5b4790f23d437',
				'label' => __('Aviso web', 'incognitos'),
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5b479404a3746',
				'label' => __('Página (enlace)', 'incognitos'),
				'name' => 'cookiesPopupPagEnlace',
				'type' => 'page_link',
				'instructions' => __('Selecciona la página de la "Política de Cookies" para poder enlazar hacia ésta.', 'incognitos'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'allow_archives' => 1,
				'multiple' => 0,
			),
			array(
				'key' => 'field_5b4795a94f9b5',
				'label' => __('Texto del enlace', 'incognitos'),
				'name' => 'cookiesPopupPagTxt',
				'type' => 'text',
				'instructions' => __('Inserta un texto que incite a visitar la página de la "Política de Cookies".', 'incognitos'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => __('Saber más', 'incognitos'),
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5b47967b4f9b6',
				'label' => __('Contenido', 'incognitos'),
				'name' => 'cookiesPopupCont',
				'type' => 'textarea',
				'instructions' => __('Informa al visitante del sitio web sobre la utilización de cookies. Se breve dado que la información extensa se encuentra en la página de la "Política de Cookies".', 'incognitos'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => __('Utilizamos cookies propias y de terceros para ofrecerle un mejor servicio. Si continúa navegando asumimos que acepta su uso.', 'incognitos'),
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'new_lines' => '',
			),
			array(
				'key' => 'field_5b4798862c204',
				'label' => __('Aceptación (botón)', 'incognitos'),
				'name' => 'cookiesPopupBtnTxt',
				'type' => 'text',
				'instructions' => __('Inserta un texto mediante el cual se de a entender la aceptación de la información ofrecida a través del pop-up.', 'incognitos'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => __('Lo he entendido', 'incognitos'),
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5b4799c62c206',
				'label' => __('Botón: color', 'incognitos'),
				'name' => 'cookiesPopupBtnColor',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#ffffff',
			),
			array(
				'key' => 'field_5b479a452c207',
				'label' => __('Botón: texto', 'incognitos'),
				'name' => 'cookiesPopupBtnColorTxt',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#000000',
			),
			array(
				'key' => 'field_5b4799702c205',
				'label' => __('Pop-up: color', 'incognitos'),
				'name' => 'cookiesPopupColor',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#ffffff',
			),
			array(
				'key' => 'field_5b479a6b2c208',
				'label' => __('Pop-up: texto', 'incognitos'),
				'name' => 'cookiesPopupColorTxt',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#000000',
			),
			array(
				'key' => 'field_5b3d11442e803',
				'label' => __('Información', 'incognitos'),
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5b3d108ae45cf',
				'label' => __('Contenido', 'incognitos'),
				'name' => 'cookiesInfo',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 0,
				'delay' => 0,
			),
			array(
				'key' => 'field_5b3d11532e804',
				'label' => __('Cookies', 'incognitos'),
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5b3d1190fa054',
				'label' => __('Cookies utilizadas en el sitio web', 'incognitos'),
				'name' => 'cookiesUtilizadas',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_5b3d11c6fa055',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => __('Añadir Cookie', 'incognitos'),
				'sub_fields' => array(
					array(
						'key' => 'field_5b3d11c6fa055',
						'label' => __('Cookie', 'incognitos'),
						'name' => 'cookie',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5b3d11e2fa056',
						'label' => __('Tipo', 'incognitos'),
						'name' => 'tipo',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5b3d11eafa057',
						'label' => __('Duración', 'incognitos'),
						'name' => 'duracion',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5b3d120efa058',
						'label' => __('Descripción', 'incognitos'),
						'name' => 'descripcion',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => 4,
						'new_lines' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-cookies',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
endif;