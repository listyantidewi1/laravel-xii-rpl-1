<div>
    <input type="text" name="title" placeholder="Masukkan judul" value="{{ old('title', optional($post ?? null)->title) }}">
</div>

@error('title')
    <div>{{ $message }}</div>
@enderror

<div>
    <textarea name="content" placeholder="Masukkan konten">
        {{ old('content', optional($post ?? null)->content) }}
    </textarea>
    @error('content')
        <div>{{ $message }}</div>
    @enderror
</div>