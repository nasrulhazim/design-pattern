<?php

namespace CleaniqueCoders\DesignPattern\Creational\FactoryMethod;

class Zakat implements Contracts\Contribution
{
    public function contribution($salary, $percentage = 2.5)
    {
        return ($percentage / 100) * $salary;
    }
}
