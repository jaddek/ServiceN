<?php

namespace Jaddek\Services\Notification\Domains\Sms\Transports;

use Jaddek\Services\Notification\Interfaces\Sms\TransportInterface as SmsTransportInterface;
use SMSCenter\SMSCenter;

/**
 * Class SmscTransport
 * @package Jaddek\Services\Notification\Singletons\Sms
 */
class SmscTransport implements SmsTransportInterface
{
    protected $client;

    /**
     * @var SmscTransport[]
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
     * @return SmscTransport
     */
    public static function getInstance(array $config): SmscTransport
    {
        $key = static::getInstanceKey($config);

        if (!isset(static::$instance[$key]) || static::$instance[$key] === null) {
            static::$instance[$key] = new static($config);
        }

        return static::$instance[$key];
    }
    /**
     * SmsTransport constructor.
     * @param array $config
     */
    private function __construct(array $config)
    {
        $this->client = new SMSCenter($config['login'], $config['passport'], $config['useSSL'],
            $config['options'] ?? []);
    }

    /**
     * @return SMSCenter
     */
    public function getClient(): SMSCenter
    {
        return $this->client;
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     *
     */
    private function __wakeup()
    {
    }
}