<?php

namespace CleaniqueCoders\DesignPattern\Behaviour\Strategy;

class Context
{
    private $validator;

    public function __construct(Contracts\Validator $validator)
    {
        $this->validator = $validator;
    }

    public function executeStrategy($value): bool
    {
        return $this->validator->valid($value);
    }
}
