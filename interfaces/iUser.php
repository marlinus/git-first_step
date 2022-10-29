<?php

interface iUser {

	public function __construct($age, $name);
	public function getAge($a);
	public function getName();

}

class User implements iUser {

	private int $age;
	private string $name;

	const IS_AUTH = false;

	public function __construct($age, $name) {
		$this->age = $age;
		$this->name = $name;
	}

	public function getAge($a): int {
		return $this->age;
	}

	public function getName(): string {
		return $this->name;
	}
}
