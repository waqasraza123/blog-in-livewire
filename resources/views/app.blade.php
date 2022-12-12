@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <livewire:create-posts />
            <livewire:show-posts />
        </div>
        <div class="col-3"></div>
    </div>
@endsection
