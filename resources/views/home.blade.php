@extends('layout')

@section('title', __('Home'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary"> @lang('Web development') </h1>
            <p class="text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
                Curabitur pretium tincidunt lacus.vinar lacinia, pede felis 
                dignissim leo, vitae tristique magna lacus sit amet eros. 
                Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt 
                eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie 
                velit. Morbi lobortis quam eu velit. Donec euismod vestibulum 
                massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. 
                Cras dignissim elit et augue. Nullam non diam. Pellentesque 
                habitant morbi tristique senectus et netus et malesuada fames 
                ac turpis egestas. In hac habitasse platea dictumst. Aenean 
                vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at 
                augue bibendum dapibus.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">@lang('Contact')</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">@lang('Projects')</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="img/home.svg" alt="@lang('Image not found')">
        </div>
    </div>
</div>
    
@endsection