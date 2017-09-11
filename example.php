<?php

require 'vendor/autoload.php';

use \Jaddek\Services\Notification\Domains\Email\Transports\SwiftTransport;
use \Jaddek\Services\Notification\Domains\Email\Messages\SwiftMessage;

$s = new \Jaddek\Services\Notification\Service();
$s->sendEmail('to', 'from', 'test', 'test',
    SwiftTransport::getInstance([
        'host'     => 'host',
        'port'     => 'port',
        'username' => 'name',
        'password' => 'pass',
        'useSSL'   => 'ssl',
    ]), new SwiftMessage());
