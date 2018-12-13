@extends('layouts.app')

@section('content')
    <div id="admin-index-app">
        <v-btn href=" {{ url('/admin/write')}} " color="green" dark ripple outline left>New post</v-btn>
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
