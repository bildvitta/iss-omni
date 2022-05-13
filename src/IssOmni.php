<?php

namespace Bildvitta\IssOmni;

use Bildvitta\IssOmni\Contracts\IssOmniFactory;
use Bildvitta\IssOmni\Helpers\IssOmniHelper;
use Bildvitta\IssOmni\Resources\Programmatic\Programmatic;

class IssOmni implements IssOmniFactory
{
    use IssOmniHelper;

    /**
     * @param string $token
     */
    public function __construct(string $token = "")
    {
        $programmatic = true;
        if ($token != '') {
            $programmatic = false;
        }
        $this->setToken($token, $programmatic);
    }

    /**
     * @return Programmatic
     */
    public function programmatic(): Programmatic
    {
        return new Programmatic($this);
    }
}
