<?php

namespace CleaniqueCoders\DesignPattern\Tests\Behaviour;

use CleaniqueCoders\DesignPattern\Behaviour\Strategy\Context;
use CleaniqueCoders\DesignPattern\Behaviour\Strategy\EmailValidator;
use CleaniqueCoders\DesignPattern\Behaviour\Strategy\UrlValidator;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    public function it_can_validate_url()
    {
        $obj = new Context(new UrlValidator());
        $this->assertTrue($obj->executeStrategy('https://google.com'));
    }

    /** @test */
    public function it_can_validate_email()
    {
        $obj = new Context(new EmailValidator());
        $this->assertTrue($obj->executeStrategy('phpunit@test.com'));
    }
}
