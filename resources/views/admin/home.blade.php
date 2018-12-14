@extends('layouts.app')

@section('content')
    <div id="admin-index-app">
        <v-toolbar dark>
            <v-toolbar-title>De Blog Admin</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                <v-btn href=" {{ url('/admin/write')}} " color="green" dark ripple outline left>New post</v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <admin-index-component
                v-for="post in posts"
            v-bind:post="post"
            v-bind:key="post.id"
            v-bind:adminurl="adminUrl">

        </admin-index-component>

        <div class="container">
            <div class="row">
                <div class="col-2 mx-auto">
                    <pagination :data="postsData" @pagination-change-page="getResults"></pagination>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app-admin-index.js') }}" defer></script>
@endsection
