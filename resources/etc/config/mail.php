<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file mail.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 17:29
 */

return [
    'from' => [
        'name' => 'Apli',
        'email' => 'noreply@apli.localhost'
    ],
    'transport' => env('MAIL_TRANSPORT'),
    'smtp' => [
        'security' => env('MAIL_SMTP_SECURITY', 'tls'),
        'port' => env('MAIL_SMTP_PORT', 2525),
        'host' => env('MAIL_SMTP_HOST'),
        'username' => env('MAIL_SMTP_USERNAME'),
        'password' => env('MAIL_SMTP_PASSWORD'),
        'local' => '',
        'verify' => env('MAIL_SMTP_VERIFY', false)
    ],
    'sendmail' => env('MAIL_SENDMAIL', '/usr/sbin/sendmail')
];
