{{-- menampilkan semua judul postingan --}}
{{-- beri warna beige pada postingan bernomor genap --}}
@if($loop->even)
    <div>{{ $key }} . {{ $post->title }}</div>
@else
    {{ $key }} . {{ $post->title }}
@endif

{{-- membuat tombol utk edit dan hapus data --}}
<div>
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" name="delete" value="Delete"/>
    </form>
</div>