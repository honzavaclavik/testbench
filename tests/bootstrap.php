<?php

require __DIR__ . '/../vendor/autoload.php';

Testbench\Bootstrap::setup(__DIR__ . '/_helpers/temp', function (\Nette\Configurator $configurator) {
	$configurator->addParameters([
		'appDir' => __DIR__ . '/../src',
	]);

	$configurator->addConfig(__DIR__ . '/tests.neon');
	if (file_exists($localConfig = __DIR__ . '/tests.local.neon')) {
		$configurator->addConfig($localConfig);
	}
});
