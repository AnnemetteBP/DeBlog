<?php
@guest
    <a href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
@else
    <a>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endguest