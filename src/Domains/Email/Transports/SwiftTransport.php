<?php

namespace Jaddek\Services\Notification\Domains\Email\Transports;

use Jaddek\Services\Notification\Interfaces\Email\TransportInterface as EmailTransportInterface;

/**
 * Class SwiftTransport
 * @package Jaddek\Services\Notification\Singletons\Email
 */
class SwiftTransport implements EmailTransportInterface
{
    protected $client;

    /**
     * @var SwiftTransport
     */
    private static $instance;

    /**
     * @param array $config
     * @return string
     */
    protected static function getInstanceKey(array $config)
    {
        return sha1(implode($config));
    }

    /**
     * @param array $config
     * @return SwiftTransport
     */
    public static function getInstance(array $config): SwiftTransport
    {
        $key = static::getInstanceKey($config);

        if (!isset(static::$instance[$key]) || static::$instance[$key] === null) {
            static::$instance[$key] = new static($config);
        }

        return static::$instance[$key];
    }

    /**
     * SwiftTransport constructor.
     * @param array $config
     */
    private function __construct(array $config)
    {
        $transport = (new \Swift_SmtpTransport($config['host'], $config['port'], $config['useSSL']))
            ->setUsername($config['username'])
            ->setPassword($config['password'])
        ;

        $this->client = new \Swift_Mailer($transport);
    }

    /**
     * @return \Swift_Mailer
     */
    public function getClient(): \Swift_Mailer
    {
        return $this->client;
    }

    /**
     *
     */
    private function __clone()
    {
    }
}