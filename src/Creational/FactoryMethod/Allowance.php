<?php

namespace CleaniqueCoders\DesignPattern\Creational\FactoryMethod;

class Allowance implements Contracts\Contribution
{
    public function contribution($salary, $percentage = 10)
    {
        return ($percentage / 100) * $salary;
    }
}
