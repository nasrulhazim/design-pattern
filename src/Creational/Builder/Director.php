<?php

namespace CleaniqueCoders\DesignPattern\Creational\Builder;

use CleaniqueCoders\DesignPattern\Creational\Builder\Contracts\Employee;
use CleaniqueCoders\DesignPattern\Creational\Builder\Employee\Profile;

class Director
{
    public function build(Employee $employee): Profile
    {
        $employee->createProfile();

        $employee->addAgreements();
        $employee->addAccessCard();
        $employee->addAccount();

        return $employee->getProfile();
    }
}
