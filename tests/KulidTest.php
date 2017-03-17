<?php

use Kulid\Kulid;

describe('Kulid', function () {
	describe('generate', function () {
		it('should generate an id of 24 characters', function () {
			$id = (new Kulid())->generate();
			expect(strlen($id))->toBe(24);
		});

		it('should generate an id prefixed by test_', function () {
			$id = (new Kulid())->generate('test_');

			expect(substr($id, 0, 5))->toBe('test_');
			expect(strlen($id))->toBe(29);
		});
	});
});
