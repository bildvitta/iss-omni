<?php

namespace Bildvitta\IssOmni\Contracts;

interface CustomerContract
{
    public const ENDPOINT_PREFIX = '/customers';

    public const ENDPOINT_FIND_BY_UUID = self::ENDPOINT_PREFIX . '/%s';
}
