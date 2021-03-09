<ul>
    <li class="{{ setActive('home') }}"><a href="{{ route('home') }}"> @lang('Home')</a></li>
    <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('About')</a></li>
    <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}"> @lang('Project')</a></li>
    <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}"> @lang('Contact')</a></li>
    @auth
        <li>
            <a href="#" onclick="event.preventDefault(); 
           document.getElementById('logout-form').submit();"> 
                {{ __('Logout') }} 
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
            @csrf
        </form>
    @else
        <li>
            <a href="{{ route('login') }}">@lang('Login')</a>
        </li>
    @endauth
</ul>
@include('partials.session-status')