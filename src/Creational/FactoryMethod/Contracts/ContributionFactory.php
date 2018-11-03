<?php

namespace CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Contracts;

interface ContributionFactory
{
    public function createContribution(): Contribution;
}
