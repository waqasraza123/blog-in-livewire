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

    public function getListeners()
    {
        return ['commentAdded'];
    }

    public function mount(){
        $this->comments = Comment::latest()->get();
    }

    public function commentAdded(){
        $this->comments = Comment::latest()->get();
    }

    public function render()
    {
        return view('livewire.comments.show-comments');
    }
}
