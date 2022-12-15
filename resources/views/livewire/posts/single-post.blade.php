<article class="blog-post">

    <h1 class="blog-post-title mb-1">{{$post->title}}</h1>
    <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by <a href="#">Waqas Raza</a></p>
    <p>{{$post->content}}</p>

    <div class="my-5">

        @if(session()->has('commentAddedMessage'))
            <div class="alert alert-success">{{session('commentAddedMessage')}}</div>
        @endif

        <form wire:submit.prevent="saveComment">
            @csrf
            <div class="mb-3">
                @error('comment')<div class="alert alert-danger my-2">{{$message}}</div>@enderror
                <textarea class="form-control"
                    wire:model="comment"
                    name="comment"
                    rows="5"
                    placeholder="Type your comment here.">
                </textarea>
            </div>

            <button class="btn btn-primary" type="submit">Post Comment</button>
        </form>
    </div>

    {{--show comments--}}
    <div class="my-3 comments">
        <livewire:comments.show-comments />
    </div>

</article>
