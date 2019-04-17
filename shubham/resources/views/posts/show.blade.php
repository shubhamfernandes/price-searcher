@extends('layouts.app')

@section('content')
<br>

@if($post->cover_image!="")
<h1 align="center">Action Completed</h1>
<br>
<center><img align="middle" height="505" width="700" src="/price-searcher/shubham/storage/app/public/cover_images/{{$post->cover_image}}"><center>
@endif
<br>
<br>
<div class="para" align="center" style=" margin: 1.5em 0;color: #888;font-weight: 350;margin: 0.5em 0 0.2em 0;font-family: 'Raleway', sans-serif;font-size: 18px;">
	{{$post->body}}
</div>
<br>
@if($post->cover_image=="")
<center>
<a href="/price-searcher/shubham/public/posts/" class="btn btn-warning">Go Back</a>
<a href="/price-searcher/shubham/public/posts/{{$post->id}}/edit" class="btn btn-success">Complete Action?</a>
</center>
@else
<center>
<a href="/price-searcher/shubham/public/posts/" class="btn btn-warning">Go Back</a>
</center>
@endif
@endsection()