<?php

namespace CleaniqueCoders\DesignPattern\Behaviour\Strategy;

class EmailValidator implements Contracts\Validator
{
    public function valid($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
