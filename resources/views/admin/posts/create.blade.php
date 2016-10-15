@extends('layouts.admin')

@section('content')

<h1>Create Post</h1>

	


{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' =>true]) !!} 
<div class="form-group{{$errors->has('title') ? ' has-error' : '' }}  ">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class'=>'form-control' ]) !!}
	@if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
         </span>
    @endif
	
</div>

<div class="form-group{{$errors->has('category_id') ? ' has-error' : '' }} ">
	{!! Form::label('category_id', 'Category:') !!}
	{!! Form::select('category_id',array(''=>'options'), null, ['class'=>'form-control']) !!}
	@if ($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
         </span>
    @endif
</div>


<div class="form-group{{$errors->has('body') ? ' has-error' : '' }}">
	{!! Form::label('body', 'Content:') !!}
	{!! Form::textarea('body',null, ['class'=>'form-control']) !!}
	@if ($errors->has('body'))
        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
         </span>
    @endif
</div>

<div class="form-group">
	{!! Form::label('photo_id', 'Photos:') !!}
	{!! Form::file('photo_id', ['class'=>'form-control']) !!}
	
</div>

<div>
	{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}


@stop