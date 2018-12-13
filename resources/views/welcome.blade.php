@extends('layouts.app')

@section('content')
    <div id="app">
        <index-component
                v-for="post in posts"
                v-bind:post="post"
                v-bind:key="post.id">

        </index-component>
        <pagination :data="postsData" @pagination-change-page="getResults"></pagination>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection