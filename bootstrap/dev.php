<?php
/*
|--------------------------------------------------------------------------
| Check Allowed Ips
|--------------------------------------------------------------------------
|
| For the development environment the first thing we're going to do is
| check which ips you are allowed to access.
|
*/

$config = require APLI_CONFIG . '/dev.php';
$allowIps = (require APLI_CONFIG . '/dev.php')['allow_ips'] ?? '';

if ($allowIps !== 'all') {
    $allowIps = array_merge(
        ['127.0.0.1', 'fe80::1', '::1'],
        array_map('trim', explode(',', $config['allow_ips'] ?? ''))
    );

    // Get allow remote ips from config.
    if (isset($_SERVER['HTTP_CLIENT_IP'])
        || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
        || !in_array(@$_SERVER['REMOTE_ADDR'], $allowIps, true)
    ) {
        header('HTTP/1.1 403 Forbidden');

        exit('Forbidden');
    }
}

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/
$app = new \Apli\Web\DevApplication;

define('APLI_DEBUG', $app->get('system.debug'));


/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
