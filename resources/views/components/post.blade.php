<div>
    @foreach($posts as $post)
        <div class="post">
            <span class="post__title">
                {{ $post->title }}
            </span>
            <span class="post__short-description">
                {{ $post->content }}
            </span>
            <button class="btn btn-info">
                Read more
            </button>
        </div>
    @endforeach
    <div class="pagination">
        {{ $posts->links() }}
    </div>
</div>
