@extends('layout')

@section('title', 'Project')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0"> @lang('Project') </h1>

            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}">@lang('Create project')</a>
            @endauth
        </div>
        <p class="lead text-secondary">Proyecto realizados.</p>
        <ul class="list-group">
            @forelse($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm text-secondary">
                <a class="d-flex justify-content-between align-items-center" href="{{ route('projects.show', $project) }}"> 
                    <span class="font-weight-bold">
                        {{ $project->title }}
                    </span>
                    <span class="text-black-50">
                        {{ $project->created_at->format('d/m/Y') }}
                    </span>
                </a>
            </li> 
            @empty
            <li class="list-group-item border-0 mb-3 shadow-sm"> @lang('There any projecs for show') </li>
            @endforelse
        </ul>
        <div style="max-width: 50px; max-height: 10px">{{ $projects->links() }}</div>
    </div>
@endsection