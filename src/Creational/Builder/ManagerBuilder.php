<?php

namespace CleaniqueCoders\DesignPattern\Creational\Builder;

use CleaniqueCoders\DesignPattern\Creational\Builder\Employee\Profile;

class ManagerBuilder implements Contracts\Employee
{
    private $accountant;

    public function createProfile()
    {
        $this->accountant = new Employee\Manager();
    }

    public function getProfile(): Profile
    {
        return $this->accountant;
    }

    public function addAgreements()
    {
        $this->accountant->setDetail('Join Agreement', new Employee\Agreement());
        $this->accountant->setDetail('NDA Agreement', new Employee\Agreement());
    }

    public function addAccessCard()
    {
        $this->accountant->setDetail('Access Card', new Employee\AccessCard());
    }

    public function addAccount()
    {
        $this->accountant->setDetail('File Account', new Employee\Account());
        $this->accountant->setDetail('Bank Acount', new Employee\Account());
    }

    public function addLeave()
    {
        $this->accountant->setDetail('Annual Leave', new Employee\Leave());
        $this->accountant->setDetail('Maternity Leave', new Employee\Leave());
    }
}
