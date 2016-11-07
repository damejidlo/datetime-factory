<?php

namespace Damejidlo\DateTimeFactory;

use DateTimeImmutable;



class DateTimeImmutableFactory
{

	/**
	 * @return DateTimeImmutable
	 */
	public function getNow()
	{
		return new DateTimeImmutable();
	}

}
