<?php

namespace CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Contracts;

interface Contribution
{
    public function contribution($salary, $percentage = 10);
}
