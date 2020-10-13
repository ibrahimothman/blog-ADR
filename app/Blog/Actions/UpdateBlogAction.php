<?php

namespace App\Blog\Actions;

use App\Blog\Domain\Models\Blog;
use App\Blog\Domain\Requests\CreateBlogRequest;
use App\Blog\Domain\Services\UpdateBlogService;
use App\Blog\Responder\CreateBlogResponder;

class UpdateBlogAction
{
    public function __construct(CreateBlogResponder $responder, UpdateBlogService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }
    public function __invoke(CreateBlogRequest $request, Blog $blog)
    {
        return $this->responder->prepareResponse($this->service->handle($request->validated(), $blog))->respond();
    }
}
