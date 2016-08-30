<?php

namespace Damejidlo\DateTimeFactory;

use DateTime;



class DateTimeFactory
{

	/**
	 * @return DateTime
	 */
	public function getNow()
	{
		return new DateTime();
	}

}
