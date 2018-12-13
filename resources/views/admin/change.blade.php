@extends('layouts.app')

@section('content')
    <div id="admin-change-app">
        <div hidden id="page" class="{{ $post->id }}"></div>
        <admin-change-component
                v-bind:post="post"
                v-bind:adminurl="adminUrl">

        </admin-change-component>
    </div>
    <script src="{{ asset('js/app-admin-change.js') }}" defer></script>
@endsection