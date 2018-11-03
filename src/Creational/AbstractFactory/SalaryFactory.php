<?php

namespace CleaniqueCoders\DesignPattern\Creational\AbstractFactory;

class SalaryFactory
{
    public function createAllowanceContribution($salary, $percentage = 10): AllowanceContribution
    {
        return new AllowanceContribution($salary, $percentage = 10);
    }

    public function createZakatContribution($salary, $percentage = 2.5): ZakatContribution
    {
        return new ZakatContribution($salary, $percentage = 2.5);
    }
}
