@extends('layout')

@section('title', 'Create Project')

@section('content')

    <h1> @lang('Create New Project') </h1>
    
    @include('partials.validation-errors')
    
    <form method="POST" action="{{ route('projects.store') }}">
        @method('POST')
        
        @include('projects._form', ['btnText' => 'Save'])
    </form>
@endsection