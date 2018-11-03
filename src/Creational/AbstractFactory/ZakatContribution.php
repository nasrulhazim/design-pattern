<?php

namespace CleaniqueCoders\DesignPattern\Creational\AbstractFactory;

class ZakatContribution implements Contracts\Contribution
{
    private $salary;
    private $percentage;

    public function __construct($salary, $percentage = 2.5)
    {
        $this->salary     = $salary;
        $this->percentage = $percentage;
    }

    public function contribution(): float
    {
        return $this->salary * $this->percentage;
    }

    public function type(): string
    {
        return ContributionType::DEDUCTION;
    }
}
