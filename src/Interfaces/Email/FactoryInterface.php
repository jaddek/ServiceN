<?php

namespace Jaddek\Services\Notification\Interfaces\Email;

interface FactoryInterface
{
    public function create(): EmailInterface;
}