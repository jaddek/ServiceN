<?php

namespace Jaddek\Services\Notification\Interfaces\Sms;

interface TransportInterface{
    /**
     * @return mixed
     */
    public function getClient();
}