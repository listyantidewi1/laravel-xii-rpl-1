<h1>Post index</h1>

@forelse ($posts as $key => $post)

    {{ $key }} . {{ $post['title'] }} <br > {{ $post['content'] }}
    <br/>

@empty
    <p>Nothing to display</p>
@endforelse

{{-- @foreach($posts as $postingan)
    {{ $postingan['title'] }} <br >
    {{ $postingan['content'] }}
@endforeach --}}
