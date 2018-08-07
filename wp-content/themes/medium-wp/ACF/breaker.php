<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_breaker',
		'title' => 'Breaker',
		'fields' => array (
			array (
				'key' => 'field_5b694ad065126',
				'label' => 'Breaker Title',
				'name' => 'breaker_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '3',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
