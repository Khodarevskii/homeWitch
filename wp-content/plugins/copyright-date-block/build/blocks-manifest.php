<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/copyright-date-block',
		'version' => '0.1.0',
		'title' => 'Copyright Date Block',
		'category' => 'widgets',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'attributes' => array(
			'showStartingYear' => array(
				'type' => 'boolean'
			),
			'startingYear' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'color' => array(
				'background' => false,
				'text' => true
			),
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'textAlign' => true
			),
			'align' => true
		),
		'textdomain' => 'copyright-date-block',
		'editorScript' => 'file:./index.js',
		'render' => 'file:./render.php'
	)
);
