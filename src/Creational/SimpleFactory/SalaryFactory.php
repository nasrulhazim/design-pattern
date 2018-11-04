<?php

namespace CleaniqueCoders\DesignPattern\Creational\SimpleFactory;

class SalaryFactory
{
    public function createSalary(): Salary
    {
        return new Salary();
    }
}
