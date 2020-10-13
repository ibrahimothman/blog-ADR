<?php

namespace app\Payload;

use app\Payloads\Payload;

class NotFoundPayload extends Payload
{
    protected $status = 404;
    protected $data = 'Not found resource';
}
