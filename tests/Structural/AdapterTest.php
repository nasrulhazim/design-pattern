<?php

namespace CleaniqueCoders\DesignPattern\Tests\Structural;

use CleaniqueCoders\DesignPattern\Structural\Adapter\AccessCard;
use CleaniqueCoders\DesignPattern\Structural\Adapter\AttendanceAdapter;
use CleaniqueCoders\DesignPattern\Structural\Adapter\Contracts\Attendance;
use CleaniqueCoders\DesignPattern\Structural\Adapter\WebAttendance;
use CleaniqueCoders\DesignPattern\Tests\TestCase;

class AdapterTest extends TestCase
{
    /** @test */
    public function it_can_validate_on_web()
    {
        $attendance = new WebAttendance();
        $this->assertInstanceOf(Attendance::class, $attendance);
        $this->assertTrue($attendance->validate());
    }

    /** @test */
    public function it_can_validate_on_access_card()
    {
        $accessCard = new AccessCard();
        $attendance = new AttendanceAdapter($accessCard);

        $this->assertInstanceOf(Attendance::class, $accessCard);
        $this->assertTrue($attendance->validate());
    }
}
