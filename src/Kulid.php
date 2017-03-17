<?php

namespace Kulid;

class Kulid {
	public function generate($prefix = '') {
		$chars = str_split('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz');

		$stringArray = [];
		for ($i = 0; $i < 24; $i++) {
			$randomNumber = mt_rand(0, count($chars) - 1);
			$stringArray[] = $chars[$randomNumber];
		}

		$id = $prefix . implode($stringArray);

		return $id;
	}
}
