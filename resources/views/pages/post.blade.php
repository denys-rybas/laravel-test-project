@extends('layouts.layout')

@section('content')
    <article>
        <h2>
            {{ $post->title }}
        </h2>
        <div>
            {{ $post->content }}
        </div>
        <a class="btn btn-secondary"
           href="{{ url()->previous() }}"
        >
            Back
        </a>
    </article>
@endsection
