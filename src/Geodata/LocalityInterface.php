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
 * Denotes an object that may be associated with an area, town, city or
 * neighbourhood within a county.
 *
 * @author Warren Heyneke <warren@bit64.co>
 *
 */
interface LocalityInterface extends CountyInterface, TimeZoneInterface {

	public function getLocalityIdentifer(): ?string;
	public function getLocalityName(string $locale = null): ?string;

}
