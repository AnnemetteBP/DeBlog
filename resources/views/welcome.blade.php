@extends('layouts.app')

@section('content')
    <div id="app">
        <v-toolbar dark>
            <v-toolbar-title>De Blog</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
            </v-toolbar-items>
        </v-toolbar>
        <index-component
                v-for="post in posts"
                v-bind:post="post"
                v-bind:key="post.id">

        </index-component>
        <pagination :data="postsData" @pagination-change-page="getResults"></pagination>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection