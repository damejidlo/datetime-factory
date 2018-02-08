<?php
declare(strict_types = 1);

namespace Damejidlo\DateTimeFactory;

use DateTimeImmutable;



class DateTimeImmutableFactory
{

	/**
	 * @return DateTimeImmutable
	 */
	public function getNow() : DateTimeImmutable
	{
		return new DateTimeImmutable();
	}

}
