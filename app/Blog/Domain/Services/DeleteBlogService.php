<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Models\Blog;
use App\Payloads\GenericPayload;
use App\Service;

class DeleteBlogService extends Service
{
    public function handle($blog=null)
    {
        $blog->delete();
        return new GenericPayload([
            'message' => 'Successfully deleted',
        ]);
    }
}
