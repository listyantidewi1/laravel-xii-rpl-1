@extends('layouts.app')

@section('title', 'Update Post')

@section('content')
<div class="text-center">
    <h1>Edit Post</h1>
</div>
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('posts.partials.form')
        <div>
            <input class="btn btn-warning form-control" type="submit" value="Update" name="submit"/>
        </div>
    </form>
@endsection
