@extends('layouts.layout')

@section('content')

    <section>
        @foreach($posts as $posts)
            <div class="post">
                <p class="post__title">
                    {{ $posts->title }}
                </p>
            </div>
        @endforeach
    </section>

@endsection
