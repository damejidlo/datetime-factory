<?php
declare(strict_types = 1);

namespace Damejidlo\DateTimeFactory\Tests;

require_once __DIR__ . '/bootstrap.php';

use Damejidlo\DateTimeFactory\DateTimeImmutableFactory;
use DateTimeImmutable;
use Tester\Assert;
use Tester\TestCase;



/**
 * @testCase
 */
class DateTimeImmutableTest extends TestCase
{

	public function testType() : void
	{
		$dateTimeFactory = new DateTimeImmutableFactory();

		$first = $dateTimeFactory->getNow();
		$second = $dateTimeFactory->getNow();
		Assert::type(DateTimeImmutable::class, $first);
		Assert::notSame($first, $second);
	}



	public function testGetNow() : void
	{
		$dateTimeFactory = new DateTimeImmutableFactory();

		$before = new DateTimeImmutable();
		$first = $dateTimeFactory->getNow();
		Assert::true($before <= $first);
		$after = new DateTimeImmutable();
		Assert::true($first <= $after);
		$second = $dateTimeFactory->getNow();
		Assert::true($first <= $second);
	}

}



(new DateTimeImmutableTest())->run();
