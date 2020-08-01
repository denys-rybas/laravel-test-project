@extends('blog.layouts.layout')

@section('content')

    <section>
        <x-blog-post :posts="$posts"></x-blog-post>
    </section>

@endsection
