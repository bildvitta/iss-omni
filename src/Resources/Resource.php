<?php

namespace Bildvitta\IssOmni\Resources;

use Bildvitta\IssOmni\IssOmni;

class Resource
{
    protected IssOmni $issOmni;

    /**
     * @param IssOmni $issOmni
     */
    public function __construct(IssOmni $issOmni)
    {
        $this->issOmni = $issOmni;
    }
}
