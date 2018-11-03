<?php

namespace CleaniqueCoders\DesignPattern\Structural\Adapter;

class AccessCard implements Contracts\AccessCardAttendance, Contracts\Attendance
{
    public function validateAccessCard(): bool
    {
        return true;
    }

    public function validate(): bool
    {
        // validate either the access card is a valid card for the user
        return $this->validateAccessCard();
    }

    public function checkin(): bool
    {
        if (! $this->validate()) {
            return false;
        }
        // store the date & time for check in if success on validation
        return true;
    }
}
