<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePosts extends Component
{
    public String $title;
    public String $content;

    /**
     * validation rules
     * @return string[] = rules
     */
    protected function rules(){
        return [
            "title" => "required|min:6|max:100",
            "content" => "required|min:10|max:1000"
        ];
    }

    /**
     * when the component first renders
     * does not run after initial render
     * @return void
     */
    public function mount(){
        //initialize variables
        $this->fill([
            "title" => "",
            "content" => ""
        ]);
    }

    /**
     * save post to database
     * @return void
     */
    public function savePost(){

        //validate the fields
        $this->validate();

        //save post in the database
        $post = new Post();
        $post->title = $this->title;
        $post->content = $this->content;
        $post->save();

        //flash data to the view
        session()->flash("message", "Post saved successfully.");

        //reset the fields
        $this->title = "";
        $this->content = "";
    }

    public function render()
    {
        return view('livewire.create-posts');
    }
}
