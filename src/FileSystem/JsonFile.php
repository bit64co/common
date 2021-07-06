<?php
/*
 * This file is part of the Bit 64 Common library
 *
 * Copyright (c) 2021-current Bit 64 Solutions Pty Ltd (https://bit64.co)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bit64\Common\FileSystem;

/**
 * A JSON file object
 *
 * @author Warren Heyneke <warren@bit64.co>
 *
 */
class JsonFile extends File {

	private $filename;

	public function __construct(
		string $filename,
		string $open_mode = "r",
		bool $use_include_path = false,
		resource $context = null
	) {
		$this->filename = $filename;
		parent::__construct($filename, $open_mode, $use_include_path, $context);
	}

	public function readData(int $depth = 512, int $flags = 0): array {

		$data = json_decode($this->fread($this->getSize()), true, $depth, $flags);

		if (JSON_ERROR_NONE !== json_last_error()) {
			throw new \RuntimeException(sprintf('Malformed JSON in \'%s\'', $this->filename));
		}

		return $data;
	}

}
