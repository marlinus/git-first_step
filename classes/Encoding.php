<?php


namespace Classes;


class Encoding {

	/**
	 * @param string $fromEncoding
	 * @param string $toEncoding
	 * @param string $str
	 * @return string
	 */
	public static function iconvEx(
		string $fromEncoding,
		string $toEncoding,
		string $str) {

		return iconv($fromEncoding, $toEncoding, $str);
	}
}