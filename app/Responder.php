<?php

namespace App;

abstract class Responder
{
    protected $response;
    abstract function respond();

    public function prepareResponse($response)
    {
        $this->response = [
            'data' => $response->getData(),
            'status' => $response->getStatus(),
        ];

        return $this;

    }
}
