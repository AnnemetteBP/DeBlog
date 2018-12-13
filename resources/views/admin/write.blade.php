@extends('layouts.app')

@section('content')
    <div id="admin-write-app">
        <admin-write-component
                v-bind:adminurl="adminUrl">

        </admin-write-component>
    </div>
    <script src="{{ asset('js/app-admin-write.js') }}" defer></script>
@endsection