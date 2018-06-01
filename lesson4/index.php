<?
require_once 'DBWorker.class.php';
require_once 'Twig/Autoloader.php';
require_once 'Twig/render.php';

Twig_Autoloader::register();
$sql = DBWorker::getInstance();
print_r( $sql->getLimitGoods(0,1));

$data = array('data' => $sql->getLimitGoods(0, 15));
$template = 'index';

try{
	echo render($template, $data);
} catch (Exception $e){
	die ('ERROR: ' . $e->getMessage());
	print_r($data);
}






// Для заполнения таблицы
/*for ($i = 0; $i < 50; $i++) {
	$query = "INSERT INTO goods (title, good_info, cost) values ('название_" . $i . "', 'описание товара должно быть чуть длиннее, чем название, но индекс тот же_" . $i . "', $i*37)";

	mysqli_query($pdo, $query);
}*/
	