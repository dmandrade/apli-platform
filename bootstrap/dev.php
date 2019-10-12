<?php

use Apli\Web\DevApplication;

$config = require APLI_CONFIG . '/dev.php';
$allowIps = $config['allow_ips'] ?? '';

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

$app = new DevApplication;

define('APLI_DEBUG', $app->get('system.debug'));

return $app;
