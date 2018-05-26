<?php

require_once 'Twig/Autoloader.php';
require_once 'Twig/forTwig.function.php';

Twig_Autoloader::register();

$data = array(
    'picture' => $_GET['name']
  );

try {
  echo forTwig('album_full', $data);
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}