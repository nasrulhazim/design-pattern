<?php

namespace CleaniqueCoders\DesignPattern\Tests;

class IntroductionTest extends TestCase
{
    /** @test */
    public function it_has_design_pattern_class()
    {
        $this->assertTrue(class_exists(\CleaniqueCoders\DesignPattern\DesignPattern::class));
    }

    /** @test */
    public function it_can_create_design_pattern_object()
    {
        $object = new \CleaniqueCoders\DesignPattern\DesignPattern();
        $this->assertTrue($object instanceof \CleaniqueCoders\DesignPattern\DesignPattern);
    }
}
