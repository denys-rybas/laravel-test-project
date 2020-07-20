@extends('layouts.layout')

@section('content')

    <section>
        <x-post :posts="$posts"></x-post>
    </section>

@endsection
