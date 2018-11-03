<?php

namespace CleaniqueCoders\DesignPattern\Behaviour\Strategy\Contracts;

interface Validator
{
    public function valid($value): bool;
}
