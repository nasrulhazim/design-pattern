<?php

namespace CleaniqueCoders\DesignPattern\Creational\StaticFactory;

use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\AllowanceFactory;
use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Contracts\Contribution;
use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\ZakatFactory;

final class SalaryFactory
{
    /**
     * @param string $type
     *
     * @return \CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Contracts\Contribution
     */
    public static function factory(string $type): Contribution
    {
        if ('zakat' == $type) {
            return (new ZakatFactory())->createContribution();
        }

        if ('allowance' == $type) {
            return (new AllowanceFactory())->createContribution();
        }

        throw new \InvalidArgumentException('Unknown contribution type given');
    }
}
