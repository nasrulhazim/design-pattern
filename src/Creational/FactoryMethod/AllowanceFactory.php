<?php

namespace CleaniqueCoders\DesignPattern\Creational\FactoryMethod;

class AllowanceFactory implements Contracts\ContributionFactory
{
    public function createContribution(): Contracts\Contribution
    {
        return new Allowance();
    }
}
