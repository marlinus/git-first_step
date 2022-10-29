<?php

namespace Traits;

require_once __DIR__ . './Helper.php';

use Traits\Helper;
use Traits\Helper2;

class Employee {

	use Helper, Helper2 {
		\Traits\Helper::addNewEmployee insteadof \Traits\Helper2;
	}

	public function __construct($props) {
		$this->name = $props['name'];
		$this->age = $props['age'];
		$this->salary = $props['salary'] . ' $';
	}

	public function method(): string {
		return 'method';
	}

	public function __get(string $name) {
		return $name;
	}
}
