<?php
namespace App\Blog\Responder;
use App\Blog\Domain\Resources\Blog as BlogResources;
use App\Responder;

class GetBlogsResponder extends Responder
{
    public function respond()
    {
        $this->response['data'] = BlogResources::collection(($this->response['data']));
        return response()->json($this->response,  $this->response['status']);
    }
}
