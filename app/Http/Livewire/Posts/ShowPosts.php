<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts;
    protected $listeners = ["postAdded" => "loadPosts"];

    public function mount(){
        $this->loadPosts();
    }

    /*
     * get all posts from DB
     * @return void
     */
    public function loadPosts(){
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
