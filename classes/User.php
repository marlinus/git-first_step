<?php

namespace Classes;

class User {
	public function __construct(
		public string $name,
		public int $age
	) {
		$this->name = $name;
		$this->age = $age;
		$this->isGuest = true;
	}

	public function __toString(): string {
		return "<p>{$this->name}</p>";
	}

	public function __call(string $name, array $arguments) {
		echo "Method $name is not exists";
		echo '<ul>';
		foreach ($arguments[0] as $value) {
			echo "<li>$value</li>";
		}
		echo '</ul';
	}
}