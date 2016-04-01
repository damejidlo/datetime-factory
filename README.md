[![Downloads this Month](https://img.shields.io/packagist/dm/damejidlo/datetime-factory.svg)](https://packagist.org/packages/damejidlo/datetime-factory)
[![Latest Stable Version](https://poser.pugx.org/damejidlo/datetime-factory/v/stable)](https://github.com/damejidlo/datetime-factory/releases)
![](https://travis-ci.org/damejidlo/datetime-factory.svg?branch=master)
![](https://scrutinizer-ci.com/g/damejidlo/datetime-factory/badges/quality-score.png?b=master)
![](https://scrutinizer-ci.com/g/damejidlo/datetime-factory/badges/coverage.png?b=master)

# Motivation
In our application you should never obtain NOW via `new DateTime()` or from SQL `NOW()`. Because it's unmockable
and therefore untestable.

This ultra-simple library provides service you can easily use and mock.

# Install
```
composer install damejidlo/datetime-factory
```

And then just register it in your `config.neon` as a service.

# Example (of mocking in tests)
```php
trait MockDateTimeFactoryTrait
{
	/** @return Container */
	abstract function getContainer();

	private function mockDateTimeFactoryService(\DateTime $subjectTime)
	{
		$dateTimeFactory = Mockery::mock(DateTimeFactory::class);
		$dateTimeFactory->shouldReceive('getNow')->andReturn($subjectTime);
		$this->getContainer()->removeService('dateTimeFactory');
		$this->getContainer()->addService('dateTimeFactory', $dateTimeFactory);
	}
}
```
