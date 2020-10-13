<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Models\Blog;
use App\Payloads\GenericPayload;
use App\Service;

class CreateBlogService extends Service
{
    public function handle($data=[])
    {
        $blog = Blog::create($data);
        return new GenericPayload($blog);
    }
}
