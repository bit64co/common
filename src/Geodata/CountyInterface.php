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
 * Denotes an object that may be associated with a administrative division
 * of a province.
 *
 * @author Warren Heyneke <warren@bit64.co>
 *
 */
interface CountyInterface extends ProvinceInterface {

	public function getCountyIdentifer(): ?string;
	public function getCountyName(string $locale = null): ?string;

}
