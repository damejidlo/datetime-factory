<?php
declare(strict_types = 1);

namespace Damejidlo\DateTimeFactory\Tests;

require __DIR__ . '/../vendor/autoload.php';

use Tester\Environment;



if (!class_exists('Tester\Assert')) {
	echo "Install Nette Tester using `composer update --dev`\n";
	exit(1);
}

date_default_timezone_set('Europe/Prague');

Environment::setup();
