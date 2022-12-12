<div>
    <h2 class="mb-3">Previous Comments</h2>
    @foreach($comments as $comment)
        <div class="px-3 py-2 text-bg-light mb-3">
            <p class="comment fs-5">{{$comment->comment}}</p>
            <div class="row">
                <div class="col">
                    <p class="posted-time fs-6 fw-lighter text-start">{{$comment->created_at->diffForHumans()}}</p>
                </div>
                <div class="col">
                    <p class="text-end fs-6 fw-light">by <a href="#">Waqas</a></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
