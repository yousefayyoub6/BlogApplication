<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowComment extends Component
{

    public $post_id;
    public $comments;
    public $newComment;
    public $oldComment;
    public $comment_id;
    public $commentsCount = 5;

    public function rules()
    {
        return [
            'newComment' => 'required'
        ];
    }

    public function mount($post_id)
    {
        $this->post_id = $post_id;
        $this->getComments();
    }

    public function getComments()
    {
        $this->comments = Comment::where('post_id', $this->post_id)->take($this->commentsCount)->latest()->get();
    }

    public function addComment()
    {
        $this->validate();
        try {
            Comment::create([
                'comment' => $this->newComment,
                'post_id' => $this->post_id,
                'user_id' => Auth::user()->id
            ]);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
        $this->reset('newComment');
        $this->getComments();
    }

    public function edit($id)
    {
        $this->comment_id = $id;
        $this->oldComment = Comment::find($id)->comment;
    }

    public function update()
    {
        $this->newComment = $this->oldComment;
        $this->validate();
        try {
            Comment::find($this->comment_id)->update([
                'comment' => $this->newComment,
            ]);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
        $this->reset(['newComment', 'comment_id']);
        $this->getComments();
    }

    public function cancelEdit()
    {
        $this->reset('comment_id');
    }

    public function loadMore()
    {
        // Increase the number of comments shown by 5
        $this->commentsCount += 5;
        $this->getComments();
    }

    public function delete($id)
    {
        try {
            Comment::findOrfail($id)->delete();
            $this->getComments();
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => $ex->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.show-comment');
    }
}
