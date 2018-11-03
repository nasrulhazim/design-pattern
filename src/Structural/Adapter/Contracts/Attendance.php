<?php

namespace CleaniqueCoders\DesignPattern\Structural\Adapter\Contracts;

interface Attendance
{
    public function validate(): bool;

    public function checkin(): bool;
}
