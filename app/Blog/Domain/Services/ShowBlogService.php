<?php

namespace App\Blog\Domain\Services;

use App\Payloads\GenericPayload;
use App\Service;

class ShowBlogService extends Service
{
    public function handle($blog=null)
    {
        return new GenericPayload($blog);
    }
}
