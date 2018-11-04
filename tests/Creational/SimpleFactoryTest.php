<?php

namespace CleaniqueCoders\DesignPattern\Tests\Creational;

use CleaniqueCoders\DesignPattern\Creational\SimpleFactory\Salary;
use CleaniqueCoders\DesignPattern\Creational\SimpleFactory\SalaryFactory;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class SimpleFactoryTest extends TestCase
{
    /** @test */
    public function it_can_create_salary()
    {
        $salary = (new SalaryFactory())->createSalary();

        $this->assertInstanceOf(Salary::class, $salary);
    }
}
