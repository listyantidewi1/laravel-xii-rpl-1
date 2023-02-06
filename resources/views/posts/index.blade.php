{{-- menggunakan template dari file app.blade.php di folder layouts --}}
@extends('layouts.app')
{{-- memberi judul pada posisi 'judul' --}}
@section('judul', 'All blog posts')
{{-- menampilkan semua posts pada posisi isi --}}
@section('isi')
    @forelse ($post as $key => $post)
        {{ $key }} . {{ $post['title'] }} <br > {{ $post['content'] }}
        <br/>
    @empty
        <p>Nothing to display</p>
    @endforelse
@endsection
