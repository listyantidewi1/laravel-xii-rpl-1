@extends('layouts.app')
@section('title', 'Tambah postingan baru')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="text-center">
            <h1>Add a new post</h1>
        </div>
        <!-- menambahkan form dari file form.blade.php di folder partials yg berada di folder posts -->
        @include('posts.partials.form')
        <div>
            <input type="submit" class="btn btn-primary form-control" value="Create" name="submit">
        </div>
    </form>
@endsection
