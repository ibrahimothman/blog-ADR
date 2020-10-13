<?php
namespace App\Blog\Responder;
use App\Blog\Domain\Resources\Blog as BlogResources;
use App\Responder;

class ShowBlogResponder extends Responder
{
    public function respond()
    {
        $this->response['data'] = new BlogResources($this->response['data']);
        return response()->json($this->response,  $this->response['status']);
    }
}
