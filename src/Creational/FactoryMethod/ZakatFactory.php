<?php

namespace CleaniqueCoders\DesignPattern\Creational\FactoryMethod;

class ZakatFactory implements Contracts\ContributionFactory
{
    public function createContribution(): Contracts\Contribution
    {
        return new Zakat();
    }
}
