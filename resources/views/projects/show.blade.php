@extends('layout')

@section('title', 'Project show | ' . $project->title)

@section('content')

    <h1> {{ $project->title }} </h1>
    @auth
        <button><a href="{{ route('projects.edit', $project) }}">@lang('Edit')</a></button>
        <form method="POST" action="{{ route('projects.destroy', $project) }}">
            @csrf @method('DELETE')
            <button>@lang('Eliminate')</button>
        </form>
    @endauth
    <p>{{ $project->description }}</p>
    <p> {{ $project->created_at->diffForHumans() }}</p>

@endsection