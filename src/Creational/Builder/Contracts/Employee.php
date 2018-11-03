<?php

namespace CleaniqueCoders\DesignPattern\Creational\Builder\Contracts;

use CleaniqueCoders\DesignPattern\Creational\Builder\Employee\Profile;

interface Employee
{
    public function createProfile();

    public function getProfile(): Profile;

    public function addAgreements();

    public function addAccessCard();

    public function addAccount();

    public function addLeave();
}
