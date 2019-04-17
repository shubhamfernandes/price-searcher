@extends('layouts.app')

@section('content')
<h1>Complete Action</h1>
<br>
{!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
	{{Form::label('body','Description')}}
	{{Form::text('body',$post->body,['class'=>'form-control','placeholder'=>'Body Text'])}}
</div>
<div class="form-group">
	{{Form::file('cover_image')}}
	<small>Only images can be uploaded</small>
</div>
{{-- since we can only use get or post in forms we use a hidden field  --}}
{{Form::hidden('_method','PUT')}}
<center>
	<a href="/price-searcher/shubham/public/posts/{{$post->id}}" class="btn btn-warning">Go Back</a>
	{{Form::submit('Update',['class'=>'btn btn-primary'])}}</center>
{!! Form::close() !!}
@endsection()