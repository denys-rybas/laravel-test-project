<div>
    @foreach($posts as $posts)
        <div class="post">
                <span class="post__title">
                    {{ $posts->title }}
                </span>
            <span class="post__short-description">
                    {{ $posts->content }}
                </span>
        </div>
    @endforeach
</div>
