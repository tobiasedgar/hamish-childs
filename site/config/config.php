<?php
return [
  'debug'   => true,
  'panel' => [
    'css' => 'assets/css/panel.css'
  ],
  'markdown' => [
    'extra' => true
  ],
  'thumbs' => [
    'presets' => [
      'standard' => ['width' => 1200, 'quality' => 80],
      'blurred' => ['width' => 60, 'quality' => 10, 'blur' => true]
    ]
  ],
  // 'genxbe.instagram' => [
  //   'client_id' => '',
  //   'client_secret' => '',
  //   'assetFolder' => 'instagram',
  //   'mediaFolder' => 'media',
  //   'db' => 'instagram.json',
  // ],
  // 'imgix' => true,
  // 'imgix.domain' => 'YOUR SITE URL',
  // 'imgix.defaults' => [
  //   'auto' => 'compress',
  // ],
];
