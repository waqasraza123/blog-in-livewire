<?php

namespace App\Http\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class ShowComments extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $comments;

    /*
     * event listeners
     */
    public function getListeners()
    {
        //return ["eventName" => "listenerName"];
        //return ["commentAdded" => "commentAdded"];
        return ['commentAdded'];
    }

    /*
     * runs on mount once
     */
    public function mount(){
        $this->comments = Comment::latest()->get();
    }

    /*
     * load comments when a new comment is added
     */
    public function commentAdded(){
        $this->comments = Comment::latest()->get();
    }

    /*
     * render
     */
    public function render()
    {
        return view('livewire.comments.show-comments');
    }
}
