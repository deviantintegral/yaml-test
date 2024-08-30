<?php

require_once 'vendor/autoload.php';

$config = [
  'urls' => [
    '/path?query=value',
  ],
];

echo Symfony\Component\Yaml\Yaml::dump($config, 2, 2);
