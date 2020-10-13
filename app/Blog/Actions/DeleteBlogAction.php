<?php

namespace App\Blog\Actions;

use App\Blog\Domain\Models\Blog;
use App\Blog\Domain\Requests\CreateBlogRequest;
use App\Blog\Domain\Services\CreateBlogService;
use App\Blog\Domain\Services\DeleteBlogService;
use App\Blog\Responder\CreateBlogResponder;
use App\Blog\Responder\DeleteBlogResponder;

class DeleteBlogAction
{
    public function __construct(DeleteBlogResponder $responder, DeleteBlogService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }
    public function __invoke(Blog $blog)
    {
        return $this->responder->prepareResponse($this->service->handle($blog))->respond();
    }
}
