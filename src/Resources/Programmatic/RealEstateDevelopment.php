<?php

namespace Bildvitta\IssOmni\Resources\Programmatic;

use Bildvitta\IssOmni\Contracts\RealEstateDevelopmentContract;

class RealEstateDevelopment extends Programmatic implements RealEstateDevelopmentContract
{
    public function search(array $query = [], array $body = []): object
    {
        $url = self::ENDPOINT_PREFIX;
        $request = $this->issOmni->request;

        if ($body) {
            $request->withBody(json_encode($body), 'application/json');
        }

        return $request->get($url, $query)->throw()->object();
    }

    public function find(string $uuid): object
    {
        $url = vsprintf(self::ENDPOINT_FIND_BY_UUID, [$uuid]);
        $request = $this->issOmni->request;
        return $request->get($url)->throw()->object();
    }
}
