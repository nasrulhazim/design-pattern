<?php

namespace CleaniqueCoders\DesignPattern\Behaviour\Strategy;

class UrlValidator implements Contracts\Validator
{
    public function valid($value): bool
    {
        return preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value);
    }
}
