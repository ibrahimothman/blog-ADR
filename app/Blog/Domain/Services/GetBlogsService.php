<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Models\Blog;
use App\Payloads\GenericPayload;
use App\Service;

class GetBlogsService extends Service
{
    public function handle()
    {
        return new GenericPayload(Blog::all());
    }
}
