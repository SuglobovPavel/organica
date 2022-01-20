<x-layaots>
    <h1>My blog</h1>
    @foreach($posts as $post)
    {{-- @dd($loop->index) --}}
    
    <article class="my-class-{{$loop->index}} my-class-{{ $loop->even ? 'even': '' }}">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->excerpt }}</p>
        <p>Author by <a href="#">{{ $post->user->name }}</a></p>
        <p>Category:   <a href="categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <a href="/posts/{{ $post->slug }}">Read more</a>
    </article>
    <?php endforeach ?>
</x-layaots>