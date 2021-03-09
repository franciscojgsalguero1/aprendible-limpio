@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <!-- todos los errores -->
                @include('partials.validation-errors')

                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                    @csrf
                    <h1 class="display-4"> @lang('Contact') </h1>
                    <hr>
                    <div class="form-group">
                    <label for="name">@lang('Name')</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" name="name" placeholder=@lang("Name...") value="{{old('name')}}"><br>
                    <!-- Errores por cada input -->
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="email">@lang('Email')</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email" name="email" placeholder=@lang("Email...") value="{{old('email')}}"><br>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="subject">@lang('Subject')</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" name="subject" placeholder=@lang("Subject...") value="{{old('subject')}}"><br>
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="content">@lang('Content')</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" name="content" placeholder=@lang("Content...")>{{old('content')}}</textarea><br>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button class="btn btn-primary btn-lg btn-block"> @lang('Send')</button>
                </form>
            </div>
        </div>
    </div>
@endsection