<?php


namespace Classes;

use JetBrains\PhpStorm\Pure;

class Request {

	public function get(string $key, $default = null) {
		return (isset($_GET[$key]) && trim($_GET[$key]) !== '') ? (int) $_GET[$key] : $default;
	}

	public function post() {

	}
}

class DB {

	/**
	 * @var \PDO
	 */
	private static $connect;

	public function __construct() {
		self::$connect = new \PDO('mysql:host=localhost;port=3500;dbname=temp', 'root', 'root');
	}

	public function select(string $sql, int $limit): array {

		$prepared = self::$connect->prepare($sql);
		$prepared->bindValue(':limit', $limit, \PDO::PARAM_INT);
		$prepared->execute();

		$arr = [];

		while ($row = $prepared->fetch()) {
			$arr[] = $row;
		}
		return $arr;
	}
}

class Main {
	public static string $props = 'props';
	private string $str = '';

	const STR = 'str';

	public function test(): string {
		return 'some text';
	}

	public static function static1() {
		return 'static1!';
	}

	public static function static2() {
		return 'static2!';
	}
}

class DI extends Main {

	#[Pure] static public function db(): DB {
		return new DB();
	}

	#[Pure] static public function request(): Request {
		return new Request();
	}

	#[Pure] static public function getParent(): string {
		return (new Main)->test();
	}
}