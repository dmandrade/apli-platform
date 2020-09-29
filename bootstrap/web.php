<?php

use Apli\Web\Application;

$app = new Application;

define('APLI_DEBUG', $app->get('system.debug'));

return $app;
