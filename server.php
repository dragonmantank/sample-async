<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Ratchet\App;

$server = new App('localhost', '8080', '0.0.0.0');
$server->run();
