<?php

namespace Jaddek\Services\Notification\Domains\Foundation;

/**
 * Trait ObjectTrait
 * @package Jaddek\Services\Notification\Domains\Foundation
 */
trait ObjectTrait
{
    /**
     * @param array $params
     * @return $this
     */
    public function setParams(array $params)
    {
        foreach ($params as $name => $value) {
            $this->{$name} = $value;
        }

        return $this;
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->{$name} = $value;
        }
    }
}