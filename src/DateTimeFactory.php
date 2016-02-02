<?php

namespace Damejidlo\DateTimeFactory;

use Nette\Object;
use Nette\Utils\DateTime;



class DateTimeFactory extends Object
{

	/**
	 * @return DateTime
	 */
	public function getNow()
	{
		return new DateTime();
	}

}
