<?php

namespace Jaddek\Services\Notification\Interfaces\Email;

interface TransportInterface
{
    /**
     * @return mixed
     */
    public function getClient();
}