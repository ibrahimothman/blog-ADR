<?php

namespace App\Blog\Actions;

use App\Blog\Domain\Services\GetBlogsService;
use App\Blog\Responder\GetBlogsResponder;

class GetBlogsAction
{
    public function __construct(GetBlogsResponder $responder, GetBlogsService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }
    public function __invoke()
    {
        return $this->responder->prepareResponse($this->service->handle())->respond();
    }
}
