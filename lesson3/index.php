<?
/*В папку с твигом дописана ускоряющая функция forTwig*/
require_once 'Twig/Autoloader.php';
require_once 'Twig/forTwig.function.php';
require_once 'resize.php';

Twig_Autoloader::register();

function resize($name){
	$width = 150;
	$height = 150;
	$path = './img/full/' . $name;

	create_thumbnail($name, $path, 1, $width, $height);
	return $name;
}

$images = scandir('./img/full/');
unset($images[0]);
unset($images[1]);
// unset($images[-1]);
$items = array_map('resize', $images);

$data = array(
    'items' => $items
  );


try {
  echo forTwig('album_small', $data);
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}


