<?php
namespace App\Blog\Responder;
use App\Blog\Domain\Resources\Blog as BlogResources;
use App\Responder;

class DeleteBlogResponder extends Responder
{
    public function respond()
    {
        return response()->json($this->response,  $this->response['status']);
    }
}
