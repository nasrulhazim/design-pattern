<?php

namespace CleaniqueCoders\DesignPattern\Creational\AbstractFactory;

class AllowanceContribution implements Contracts\Contribution
{
    private $salary;
    private $percentage;

    public function __construct($salary, $percentage = 10)
    {
        $this->salary     = $salary;
        $this->percentage = $percentage;
    }

    public function contribution(): float
    {
        return $this->salary * ($this->percentage / 100);
    }

    public function type(): string
    {
        return ContributionType::EARNING;
    }
}
