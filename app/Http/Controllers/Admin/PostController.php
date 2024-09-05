<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\IRepository\PostInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $post;

    public function __construct(PostInterface $_post)
    {
        $this->post = $_post;
    }

    public function index()
    {
        return  $this->post->index();
    }


    public function create()
    {
        return $this->post->create();
    }


    public function store(StorePostRequest $request)
    {
        $request->validated();
        return $this->post->store($request);
    }


    public function show(string $id)
    {
        return $this->post->show($id);
    }

    public function edit(string $id)
    {
        return $this->post->edit($id);
    }

    public function update(UpdatePostRequest $request)
    {
        $request->validated();
        return $this->post->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->post->destroy($request);
    }
}
