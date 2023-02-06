@extends('layouts.app')
@section('title', 'Tambah postingan baru')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Masukkan judul" value="{{ old('title') }}">
        </div>

        @error('title')
            <div>{{ $message }}</div>
        @enderror

        <div>
            <textarea name="content" placeholder="Masukkan konten">
                {{ old('content') }}
            </textarea>

        @error('content')
            <div>{{ $message }}</div>
        @enderror
        
    </div>
        <div>
            <input type="submit" value="Create" name="submit">
        </div>
    </form>
@endsection
