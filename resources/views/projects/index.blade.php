@extends('layout')

@section('title', 'Project')

@section('content')

    <h1> @lang('Project') </h1>
    
    @auth
        <button><a href="{{ route('projects.create') }}">@lang('Create project')</a></button>
    @endauth
    <ul>
        @forelse($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}"> {{ $project->title }}</a> <br> <small>{{ $project->description }}</small> </li> 
        @empty
            <li> @lang('There any projecs for show') </li>
        @endforelse
    </ul>
    <div style="max-width: 50px; max-height: 10px">{{ $projects->links() }}</div>
@endsection