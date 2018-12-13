@extends('layouts.app')

@section('content')
    <div id="admin-read-app">
        <div hidden id="page" class="{{ $post->id }}"></div>
        <admin-read-component
                v-bind:post="post"
                v-bind:adminurl="adminUrl">

        </admin-read-component>
    </div>
    <script src="{{ asset('js/app-admin-read.js') }}" defer></script>
@endsection