<?php

namespace App\Blog\Actions;

use App\Blog\Domain\Requests\CreateBlogRequest;
use App\Blog\Domain\Services\CreateBlogService;
use App\Blog\Responder\CreateBlogResponder;

class CreateBlogAction
{
    public function __construct(CreateBlogResponder $responder, CreateBlogService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }
    public function __invoke(CreateBlogRequest $request)
    {
        return $this->responder->prepareResponse($this->service->handle($request->validated()))->respond();
    }
}
