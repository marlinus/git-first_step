<?php

require_once __DIR__ . './vendor/autoload.php';
require_once __DIR__ . './traits/Employee.php';

use Classes\DI;
use Classes\Main;
use Traits\Employee;

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

echo "<hr>";

$employees = [
	new Employee(['name' => 'robert', 'age' => 28, 'salary' => 1000]),
	new Employee(['name' => 'albert', 'age' => 23, 'salary' => 1200]),
	new Employee(['name' => 'elmira', 'age' => 48, 'salary' => 500]),
];

foreach ($employees as $item) {
	$item->getNameEmployees();
}