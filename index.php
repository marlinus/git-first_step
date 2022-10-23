<?php

require_once __DIR__ . './vendor/autoload.php';

use Classes\DI;
use Classes\Main;

$sql = <<<SQL
SELECT * FROM city LIMIT :limit
SQL;

echo '<pre>';
//print_r(DI::db()->select($sql, 7));
var_dump(DI::request()->get('id'));
var_dump(DI::getParent());


echo floor((time() - strtotime('08.07.1994')) / 60 / 60 / 24 / 30 / 12) . ' year';

$a1 = new Main();
$a2 = new Main();

$a1::$props = 'roberto carlos!';
echo Main::STR;
echo $a1::STR;
echo "<hr> {$a1::$props}";
echo "<hr> {$a2::$props}";
print_r(get_object_vars($a1));

if (isset($_GET['class']) && !empty($_GET['class'])) {
	var_dump(class_exists('Classes\\' . $_GET['class']));
}