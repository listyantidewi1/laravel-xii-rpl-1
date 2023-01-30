@extends('layouts.app')
@section('judul', 'Postingan')

@section('isi')
    {{ $posts['title'] }}
    <br>
    {{ $posts['content'] }}
@endsection
