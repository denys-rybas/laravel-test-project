<div>
    @foreach($posts as $post)
        <div class="post">
            <span class="post__title">{{ $post->title }}</span>
            <span class="post__short-description">{{ $post->content }}</span>
            <a href="{{ action('Admin\Post\PostController@edit', $post->slug) }}">suka</a>
            <button class="btn btn-info" onclick="window.location='{{ route('post', $post->slug) }}'">
                Read more
            </button>
        </div>
    @endforeach
    <div class="pagination">
        {{ $posts->links() }}
    </div>
</div>
