<div>
    <h1>Create Posts</h1>
    <form wire:submit.prevent="savePost">
        @csrf
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            @error("title")
                <p class="alert alert-danger">{{$message}}</p>
            @enderror
            <label class="form-label">Post Title</label>
            <input type="text" wire:model="title" class="form-control" placeholder="Post Title" />
        </div>

        <div class="mb-3">
            @error("content")
                <p class="alert alert-danger">{{$message}}</p>
            @enderror
            <label class="form-label">Content</label>
            <textarea wire:model="content" class="form-control" rows="3"></textarea>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>

    </form>
</div>
