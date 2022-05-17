<?php

namespace Bildvitta\IssOmni\Contracts;

interface RealEstateDevelopmentContract
{
    public const ENDPOINT_PREFIX = '/real-estate-developments';

    public const ENDPOINT_FIND_BY_UUID = self::ENDPOINT_PREFIX . '/%s';

    /**
     * @param array $query
     * @param array $body
     * @return object
     */
    public function search(array $query = [], array $body = []): object;

    /**
     * @param string $uuid
     * @return object
     */
    public function find(string $uuid): object;
}
