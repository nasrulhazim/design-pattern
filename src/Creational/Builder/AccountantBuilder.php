<?php

namespace CleaniqueCoders\DesignPattern\Creational\Builder;

use CleaniqueCoders\DesignPattern\Creational\Builder\Employee\Profile;

class AccountantBuilder implements Contracts\Employee
{
    private $manager;

    public function createProfile()
    {
        $this->manager = new Employee\Accountant();

        return $this;
    }

    public function getProfile(): Profile
    {
        return $this->manager;
    }

    public function addAgreements()
    {
        $this->manager->setDetail('Join Agreement', new Employee\Agreement());
        $this->manager->setDetail('NDA Agreement', new Employee\Agreement());
    }

    public function addAccessCard()
    {
        $this->manager->setDetail('Access Card', new Employee\AccessCard());
    }

    public function addAccount()
    {
        $this->manager->setDetail('File Account', new Employee\Account());
        $this->manager->setDetail('Bank Acount', new Employee\Account());
    }

    public function addLeave()
    {
        $this->manager->setDetail('Annual Leave', new Employee\Leave());
        $this->manager->setDetail('Maternity Leave', new Employee\Leave());
    }
}
