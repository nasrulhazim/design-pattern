<?php

namespace CleaniqueCoders\DesignPattern\Tests\Creational;

use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Allowance;
use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\AllowanceFactory;
use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\Zakat;
use CleaniqueCoders\DesignPattern\Creational\FactoryMethod\ZakatFactory;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class FactoryMethodTest extends TestCase
{
    /** @test */
    public function it_can_create_allowance()
    {
        $factory      = new AllowanceFactory();
        $contribution = $factory->createContribution();

        $this->assertInstanceOf(Allowance::class, $contribution);
    }

    /** @test */
    public function it_can_create_zakat()
    {
        $factory      = new ZakatFactory();
        $contribution = $factory->createContribution();

        $this->assertInstanceOf(Zakat::class, $contribution);
    }
}
