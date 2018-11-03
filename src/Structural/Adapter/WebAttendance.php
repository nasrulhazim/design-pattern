<?php

namespace CleaniqueCoders\DesignPattern\Structural\Adapter;

class WebAttendance implements Contracts\Attendance
{
    public function validate(): bool
    {
        // validate either the user that trying to check in via web is valid user or not
        return true;
    }

    public function checkin(): bool
    {
        if (! $this->validate()) {
            return false;
        }
        // store the date & time for check in if success
        return true;
    }
}
