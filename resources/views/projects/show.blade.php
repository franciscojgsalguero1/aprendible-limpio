@extends('layout')

@section('title', 'Project show | ' . $project->title)

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h1> {{ $project->title }} </h1>
            <p class="text-secondary">{{ $project->description }}</p>
            <p class="text-black-50"> {{ $project->created_at->diffForHumans() }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-primary" href="{{ route('projects.index') }}">@lang('Back')</a>
                @auth
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>
                    <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">@lang('Eliminate')</a>
                </div>
                <form class="d-none" id="delete-project" method="POST" action="{{ route('projects.destroy', $project) }}">
                    @csrf @method('DELETE')
                </form>
                @endauth
            </div>
        </div>
    </div>

@endsection