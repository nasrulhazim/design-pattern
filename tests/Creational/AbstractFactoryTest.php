<?php

namespace CleaniqueCoders\DesignPattern\Tests\Creational;

use CleaniqueCoders\DesignPattern\Creational\AbstractFactory\AllowanceContribution;
use CleaniqueCoders\DesignPattern\Creational\AbstractFactory\SalaryFactory;
use CleaniqueCoders\DesignPattern\Creational\AbstractFactory\ZakatContribution;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    /** @test */
    public function it_can_create_allowance_contribution()
    {
        $factory      = new SalaryFactory();
        $contribution = $factory->createAllowanceContribution(10000);

        $this->assertInstanceOf(AllowanceContribution::class, $contribution);
    }

    /** @test */
    public function it_can_create_zakat_contribution()
    {
        $factory      = new SalaryFactory();
        $contribution = $factory->createZakatContribution(10000);

        $this->assertInstanceOf(ZakatContribution::class, $contribution);
    }
}
