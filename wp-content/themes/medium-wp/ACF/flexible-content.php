<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b6ab108c3bea',
	'title' => 'Flexible Content',
	'fields' => array(
		array(
			'key' => 'field_5b6aba2be7a6b',
			'label' => 'Hero Image',
			'name' => 'hero_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5b6ab9dfe7a6a',
			'label' => 'Sub-title',
			'name' => 'sub-title',
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
			'key' => 'field_5b6ab11352e79',
			'label' => 'Flexible Content Field',
			'name' => 'flexible_content_field',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'5b6ab1221b2a2' => array(
					'key' => '5b6ab1221b2a2',
					'name' => 'heading',
					'label' => 'Heading',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b6ab1df52e7a',
							'label' => 'Heading text',
							'name' => 'heading_text',
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
					),
					'min' => '',
					'max' => '',
				),
				'5b6abc2bc05d0' => array(
					'key' => '5b6abc2bc05d0',
					'name' => 'text_block',
					'label' => 'Text Block',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b6abc3cc05d1',
							'label' => 'Text Block',
							'name' => 'text_block',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
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
					),
					'min' => '',
					'max' => '',
				),
				'5b6ab21785a65' => array(
					'key' => '5b6ab21785a65',
					'name' => 'image',
					'label' => 'Image',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b6ab21e85a66',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'large',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5b6ab23685a67',
							'label' => 'Image Type',
							'name' => 'image_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'regular' => 'Regular',
								'large' => 'Large',
								'full' => 'Full',
								'side' => 'Side',
							),
							'default_value' => array(
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5b6abbb7c05cd' => array(
					'key' => '5b6abbb7c05cd',
					'name' => 'code_block',
					'label' => 'Code Block',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b6abd5f95bfb',
							'label' => 'Code Block',
							'name' => 'code_block',
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
							'rows' => '',
							'new_lines' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5b6abbcbc05ce' => array(
					'key' => '5b6abbcbc05ce',
					'name' => 'embed',
					'label' => 'Embed',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b6abbf6c05cf',
							'label' => 'Embed',
							'name' => 'embed',
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
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Module',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
