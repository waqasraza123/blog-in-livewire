<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts;

    public function mount(){
        $this->loadPosts();
    }

    /*
     * get event listeners
     */
    protected function getListeners()
    {
        return [
            "postAdded" => "loadNewPost"
        ];
    }

    /*
     * appends the new post to
     * the current posts collection
     * @param $id of the new post
     * Post $post will fetch that post
     */
    public function loadNewPost(Post $post){
        $this->posts->prepend($post);
    }

    /*
     * get all posts from DB
     * @return void
     */
    public function loadPosts(){
        $this->posts = Post::latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
