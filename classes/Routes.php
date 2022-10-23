<?php

namespace Classes;

use http\Exception;

class Routes {

	private function __construct(){}

	static function getUri(): string {
		switch ($_SERVER['REQUEST_URI']) {
			case '/': {
				return 'mainPage';
			}
			default: {
				return 'error';
			}
		}


	}

}