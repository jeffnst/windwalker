<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

namespace Windwalker\Event;

/**
 * The ListenerPriority class.
 * 
 * @since  2.0
 */
class ListenerPriority
{
	const MIN = -300;
	const LOW = -200;
	const BELOW_NORMAL = -100;
	const NORMAL = 0;
	const ABOVE_NORMAL = 100;
	const HIGH = 200;
	const MAX = 300;
}
