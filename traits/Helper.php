<?php

namespace Traits;

trait Helper {
	private array $collectionEmployees = [];

	private string $name;
	private int $age;
	private string $salary;

	public function getNameEmployees() {
		foreach ($this->collectionEmployees as $employee) {
			echo "$employee->name";
		}
	}

	public function addNewEmployee($employee) {
		$this->collectionEmployees[] = $employee;
	}

	abstract public function method();

}

trait Helper2 {
	private array $collectionEmployees = [];

	public function addNewEmployee($employee) {
		$this->collectionEmployees[] = $employee;
	}
}
