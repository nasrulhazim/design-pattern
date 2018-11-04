<?php

namespace CleaniqueCoders\DesignPattern\Tests\Creational;

use CleaniqueCoders\DesignPattern\Creational\StaticFactory\SalaryFactory as StaticFactory;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class StaticFactoryTest extends TestCase
{
    /** @test */
    public function it_can_create_zakat_contribution()
    {
        $this->assertInstanceOf(
            \CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Zakat::class,
            StaticFactory::factory('zakat')
        );
    }

    /** @test */
    public function it_can_create_allowance_contribution()
    {
        $this->assertInstanceOf(
            \CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Allowance::class,
            StaticFactory::factory('allowance')
        );
    }
}
