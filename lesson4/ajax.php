<?
require "DBWorker.class.php";


$start = $_POST['start'];
$end = $_POST['end'];
$result = '';

$data = DBWorker::getInstance()->getLimitGoods($start, $end);

function build($title, $describe, $cost){
	$res = "<div class='good-wrapper'>";
	$res .= "<span class='title'>" . $title . "</span>";
	$res .= "<p class='describe'>" . $describe . "</p>";
	$res .= "<div class='cost-wrapper'><span class='cost'>" . $cost . "</span></div></div>";
	return $res;
}

foreach ($data as $item) {
	$result .= build($item['title'], $item['good_info'], $item['cost']);
	// $result .= build('title', 'good_info', 'cost');
}

echo $result;