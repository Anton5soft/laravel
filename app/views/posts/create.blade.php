@extends('layouts.main')

@section('content')
<p>
    Create post
</p>


<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'posts')) }}

<div class="form-group">
    {{ Form::label('title', 'title') }}
    {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('content', 'content') }}
    {{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create post!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop