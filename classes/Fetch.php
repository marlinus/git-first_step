<?php

namespace Classes;

class Fetch {

	static function fetch(string $uri): array {
		$ch = curl_init($uri);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$users = curl_exec($ch);
		curl_close($ch);

		return self::jsonDecode($users);
	}

	static function jsonDecode(string $users): mixed {
		return json_decode($users, true);
	}

}