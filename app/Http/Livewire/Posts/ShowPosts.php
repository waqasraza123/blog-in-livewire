<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

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
        //do something
    }

    /*
     * get all posts from DB
     * @return void
     */
    public function loadPosts(){
        $this->posts = Post::latest()->get();
    }

    /*
     * delete posts
     */
    public function deletePost(Post $post){
        //delete the post from db
        $post->delete();

        //flash data to the session
        session()->flash("postDeletedMessage", "Post deleted successfully.");
    }

    public function render()
    {
        return view('livewire.posts.show-posts', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }
}
