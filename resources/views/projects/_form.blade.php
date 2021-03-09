@csrf

<div class="form-group">
    <label for="title">@lang('Title')</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="title" placeholder=@lang('Title') value="{{ old('title', $project->title) }}" required>
</div>
<div class="form-group">
    <label for="url">@lang('URL')</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="url" placeholder=@lang('URL') value="{{ old('url', $project->url) }}" required>
</div>
<div class="form-group">
    <label for="description">@lang('Project description')</label>
    <textarea class="form-control border-0 bg-light shadow-sm" name="description" required>{{ old('description', $project->description) }}</textarea>
</div>


<button class="btn btn-primary btn-lg btn-block">{{ __($btnText) }}</button>