<?php

namespace App\Http\Livewire\Posts;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public Post $post;
    public String $comment = "";

    /*
     * validation rules
     */
    protected function rules(){
        return [
            'comment' => 'required|min:6|max:100'
        ];
    }

    /*
     * livewire:lifecycle hook
     * runs when a property is updated
     */
    public function updated(){

        //$this->validateOnly("comment");
    }

    /*
     * save comment to the db
     */
    public function saveComment(){
        //validate the fields
        $this->validate();

        //save the comment in db
        $comment = new Comment();
        $comment->comment = $this->comment;
        $comment->post_id = $this->post->id;
        $comment->save();

        //reset comment field
        $this->reset("comment");

        //flash the message to session
        session()->flash("commentAddedMessage", "Comment posted successfully.");

        //emit the event to ShowComments component
        $this->emit('commentAdded');
    }

    public function render()
    {
        return view('livewire.posts.single-post', ['post' => $this->post])
            ->extends('layout.layout')
            ->section('content');
    }
}
