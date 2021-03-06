<?php

namespace Bildvitta\IssOmni\Contracts;

interface IssOmniFactory
{
    /**
     * @const array
     */
    public const DEFAULT_HEADERS = [
        'content-type' => 'application/json',
        'accept' => 'application/json',
        'User-Agent' => 'ISS v0.0.1-alpha',
    ];

    /**
     * @const array
     */
    public const DEFAULT_OPTIONS = ['allow_redirects' => false];
}
