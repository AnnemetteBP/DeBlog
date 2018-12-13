@extends('layouts.app')

@section('content')
    <div id="app">
        <div hidden id="page" class="{{ $post->id }}"></div>
        <read-component
                v-bind:post="post">

        </read-component>
    </div>
    <script src="{{ asset('js/read-app.js') }}" defer></script>
@endsection