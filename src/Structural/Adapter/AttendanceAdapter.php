<?php

namespace CleaniqueCoders\DesignPattern\Structural\Adapter;

class AttendanceAdapter implements Contracts\Attendance
{
    private $attendance;

    public function __construct(Contracts\Attendance $attendance)
    {
        $this->attendance = $attendance;
    }

    public function validate(): bool
    {
        return $this->attendance->validate();
    }

    public function checkin(): bool
    {
        return $this->attendance->checkin();
    }
}
