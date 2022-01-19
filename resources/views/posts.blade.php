<x-layaots>
    <h1>My blog</h1>
    @foreach($posts as $post)
    {{-- @dd($loop->index) --}}
    
    <article class="my-class-{{$loop->index}} my-class-{{ $loop->even ? 'even': '' }}">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}">Read more</a>
    </article>
    <?php endforeach ?>
</x-layaots>