<?php

namespace Bildvitta\IssOmni\Resources\Programmatic;

use Bildvitta\IssOmni\Resources\Resource;

class Programmatic extends Resource
{

    /**
     * @return Customer
     */
    public function customer(): Customer
    {
        return new Customer($this->issOmni);
    }

    /**
     * @return RealEstateDevelopment
     */
    public function realEstateDevelopment(): RealEstateDevelopment
    {
        return new RealEstateDevelopment($this->issOmni);
    }
}
