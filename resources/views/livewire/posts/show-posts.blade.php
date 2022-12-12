<div>

    @if(session()->has('postDeletedMessage'))
        <div class="alert alert-danger mt-5">
            {{ session('postDeletedMessage') }}
        </div>
    @endif

    @foreach($posts as $post)
        <div class="p-4 p-md-5 mb-4 rounded text-bg-light mt-5">
            <div class="col px-0">
                <div class="row">
                    <div class="col">
                        <p class="text-start">
                            Published {{$post->created_at->diffForHumans()}}
                        </p>
                    </div>
                    <div class="col">
                        <p class="text-end">
                            <i style="cursor: pointer"
                               wire:click="deletePost({{$post->id}})"
                               class="fa-solid fa-trash fa-xl text-danger pe-auto"></i>
                        </p>
                    </div>
                </div>
                <h1 class="display-4 fst-italic">{{$post->title}}</h1>
                <p class="lead my-3">{{$post->content}}</p>
                <p class=""><a href="">Read More</a></p>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
</div>
