@foreach($posts as $post)
    <div class="p-4 p-md-5 mb-4 rounded text-bg-light mt-5">
        <div class="col px-0">
            <h1 class="display-4 fst-italic">{{$post->title}}</h1>
            <p class="lead my-3">{{$post->content}}</p>
            <p class="lead mb-0">Published {{$post->created_at->diffForHumans()}}</p>
        </div>
    </div>
@endforeach
