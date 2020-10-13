<?php

namespace App\Blog\Actions;

use App\Blog\Domain\Models\Blog;
use App\Blog\Domain\Services\ShowBlogService;
use App\Blog\Responder\ShowBlogResponder;

class ShowBlogAction
{
    public function __construct(ShowBlogResponder $responder, ShowBlogService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }
    public function __invoke(Blog $blog)
    {
        return $this->responder->prepareResponse($this->service->handle($blog))->respond();
    }
}
