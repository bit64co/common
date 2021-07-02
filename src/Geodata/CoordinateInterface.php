<?php
/*
 * This file is part of the Bit 64 Common library
 *
 * Copyright (c) 2021-current Bit 64 Solutions Pty Ltd (https://bit64.co)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bit64\Common\Geodata;

/**
 * Denotes an object that may contain a 3-dimensional coordinate about
 * a sphere, namely latitude and longitude decimals and the altitude
 * deviation from the mean radius.
 *
 * @author Warren Heyneke <warren@bit64.co>
 *
 */
interface CoordinateInterface {

	public function getLatitude(): ?float;
	public function getLongitude(): ?float;
	public function getAltitude(): ?float;

}
