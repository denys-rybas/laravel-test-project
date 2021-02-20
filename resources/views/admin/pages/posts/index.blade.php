@extends('admin.layouts.admin-layout')

@section('content')

    <section>
        <x-admin-post :posts="$posts"></x-admin-post>
    </section>

@endsection
