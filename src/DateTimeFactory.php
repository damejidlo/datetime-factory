<?php
declare(strict_types = 1);

namespace Damejidlo\DateTimeFactory;

use Nette\SmartObject;
use Nette\Utils\DateTime;



/**
 * @deprecated
 */
class DateTimeFactory
{

	use SmartObject;



	/**
	 * @return DateTime
	 */
	public function getNow() : DateTime
	{
		return new DateTime();
	}

}
