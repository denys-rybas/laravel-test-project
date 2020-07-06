<div>
    @foreach($posts as $posts)
        <div class="post d-flex">
            <p class="post__title">
                {{ $posts->title }}
            </p>
        </div>
    @endforeach
</div>
