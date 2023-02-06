@extends('layouts.app')
@section('title', 'Postingan')

@section('content')
    {{ $post['title'] }}
    <br>
    {{ $post['content'] }}
@endsection
