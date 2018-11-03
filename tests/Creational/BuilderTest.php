<?php

namespace CleaniqueCoders\DesignPattern\Tests\Creational;

use CleaniqueCoders\DesignPattern\Creational\Builder\AccountantBuilder;
use CleaniqueCoders\DesignPattern\Creational\Builder\Director;
use CleaniqueCoders\DesignPattern\Creational\Builder\Employee\Accountant;
use CleaniqueCoders\DesignPattern\Creational\Builder\Employee\Manager;
use CleaniqueCoders\DesignPattern\Creational\Builder\ManagerBuilder;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class BuilderTest extends TestCase
{
    /** @test */
    public function it_can_build_accountant_profile()
    {
        $accountantBuilder = new AccountantBuilder();
        $newAccountant     = (new Director())->build($accountantBuilder);

        $this->assertInstanceOf(Accountant::class, $newAccountant);
    }

    /** @test */
    public function it_can_build_manager_profile()
    {
        $managerBuilder = new ManagerBuilder();
        $newManager     = (new Director())->build($managerBuilder);

        $this->assertInstanceOf(Manager::class, $newManager);
    }
}
