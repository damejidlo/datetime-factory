<?php

namespace DamejidloTests\NewRelic;

require __DIR__ . '/../vendor/autoload.php';

use Tester\Environment;



if (!class_exists('Tester\Assert')) {
	echo "Install Nette Tester using `composer update --dev`\n";
	exit(1);
}

date_default_timezone_set('Europe/Prague');

Environment::setup();
