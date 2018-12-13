@extends('layouts.app')

@section('content')
    <div id="admin-index-app">
        <a :href="adminUrl + '/write'">New post</a>
        <admin-index-component
                v-for="post in posts"
            v-bind:post="post"
            v-bind:key="post.id"
            v-bind:adminurl="adminUrl">

        </admin-index-component>
        <pagination :data="postsData" @pagination-change-page="getResults"></pagination>
    </div>
    <script src="{{ asset('js/app-admin-index.js') }}" defer></script>
@endsection
