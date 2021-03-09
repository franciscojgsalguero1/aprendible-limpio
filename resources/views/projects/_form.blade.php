@csrf 
<label for="title">@lang('Title')</label><br>
<input type="text" name="title" placeholder=@lang('Title') value="{{ old('title', $project->title) }}" required><br>
{!! $errors->first('title', '<small>:message</small><br>') !!}
<label for="url">@lang('URL')</label><br>
<input type="text" name="url" placeholder=@lang('URL') value="{{ old('url', $project->url) }}" required><br>
{!! $errors->first('url', '<small>:message</small><br>') !!}
<label for="description">@lang('Project description')</label><br>
<textarea name="description" required>{{ old('description', $project->description) }}</textarea><br>
{!! $errors->first('description', '<small>:message</small><br>') !!}
<button>{{ __($btnText) }}</button>