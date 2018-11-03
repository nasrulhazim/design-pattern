<?php

namespace CleaniqueCoders\DesignPattern\Creational\Builder\Employee;

abstract class Profile
{
    private $data = [];

    public function setDetail($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }
}
