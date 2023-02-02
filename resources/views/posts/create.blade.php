@extends('layouts.app')
@section('title', 'Tambah postingan baru')

@section('content')
    <form action="" method="post">
        <div>
            <input type="text" name="title" placeholder="Masukkan judul" value="">
        </div>
        <div>
            <textarea name="content" placeholder="Masukkan konten">
            </textarea>
        </div>
        <div>
            <input type="submit" value="Create" name="submit">
        </div>
    </form>
@endsection
