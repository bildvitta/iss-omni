<?php

namespace Bildvitta\IssOmni\Resources\Programmatic;

use Bildvitta\IssOmni\Contracts\CustomerContract;
use Illuminate\Http\Client\RequestException;

class Customer extends Programmatic implements CustomerContract
{
    /**
     * @param array $query
     * @param array $body
     * @return array|object
     *
     * @throws RequestException
     */
    public function search(array $query = [], array $body = [])
    {
        $url = self::ENDPOINT_PREFIX;
        $request = $this->issOmni->request;

        if ($body) {
            $request->withBody(json_encode($body), 'application/json');
        }

        return $request->get($url, $query)->throw()->object();
    }
}
