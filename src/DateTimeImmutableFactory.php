<?php
declare(strict_types = 1);

namespace Damejidlo\DateTimeFactory;

use DateTimeImmutable;
use Nette\SmartObject;



class DateTimeImmutableFactory
{

	use SmartObject;



	/**
	 * @return DateTimeImmutable
	 */
	public function getNow() : DateTimeImmutable
	{
		return new DateTimeImmutable();
	}

}
