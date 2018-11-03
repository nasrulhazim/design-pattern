<?php

namespace CleaniqueCoders\DesignPattern\Creational\AbstractFactory\Contracts;

interface Contribution
{
    public function contribution(): float;

    public function type(): string;
}
