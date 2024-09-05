<?php

namespace App\Repository;

use App\IRepository\PostInterface;
use App\Models\Post;
use App\Traits\Toastr;

class PostRepository implements PostInterface
{
    use Toastr;
    public function index()
    {
        $posts = Post::simplePaginate(10);
        $countPosts = Post::count();

        return view('Dashboard.Admin.Postmanage.Showposts', compact('posts','countPosts'));
    }

    public function create()
    {
        return view('Dashboard.Admin.Postmanage.Create');
    }
    public function store($request)
    {
        try {
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            $this->AddToastr();
            return redirect()->back();
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }

    public function show(string $id) {}
    public function edit(string $id) {}

    public function update($request)
    {
        try {
            $update = Post::where('id', $request->id)->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            $this->UpdateToastr();
            return redirect()->back();
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }

    public function destroy($request)
    {
        Post::where('id', $request->id)->delete();
        $this->DeleteToastr();
        return redirect()->back();
    }
}
