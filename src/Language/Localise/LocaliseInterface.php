<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

namespace Windwalker\Language\Localise;

/**
 * Interface LocaliseInterface
 */
interface LocaliseInterface
{
	/**
	 * getPluralSuffixes
	 *
	 * @param int $count
	 *
	 * @return  string
	 */
	public function getPluralSuffix($count = 1);
}

