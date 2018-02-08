<?php
declare(strict_types = 1);

namespace Damejidlo\DateTimeFactory;

use DateTime;



class DateTimeFactory
{

	/**
	 * @return DateTime
	 */
	public function getNow() : DateTime
	{
		return new DateTime();
	}

}
