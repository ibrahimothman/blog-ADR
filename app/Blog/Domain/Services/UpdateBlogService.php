<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Models\Blog;
use App\Payloads\GenericPayload;
use App\Service;

class UpdateBlogService extends Service
{
    public function handle($data=[], $blog=null)
    {
        $blog->update($data);
        $blog = Blog::findOrFail($blog->id);
        return new GenericPayload($blog);
    }
}
