@extends('layout')

@section('title', 'Edit Project')

@section('content')

    <h1> @lang('Edit Project') </h1>
    
    @include('partials.validation-errors')       
        
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        
        @include('projects._form', ['btnText' => 'Update'])
        
    </form>
@endsection