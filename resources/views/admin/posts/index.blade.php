@extends('layouts.admin')

@section('content')


<h1>All Posts</h1>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>User</th>
      <th>Category</th>
      <th>Photo</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created_at</th>
      <th>updated_at</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($posts as $post)
	<tr>
	<td> {{$post->id}}</td>
	<td>{{$post->user->name}} </td>
	<td> {{$post->category ? $post->category->name : 'Uncategorize'}} </td>
	<td><img src="{{url('/images/'. ($post->photo ? $post->photo->file : 'no_image.png'))}}" width="100" height="80" class="img-rounded"></td>
	<td> {{$post->title}} </td>
	<td> {{$post->body}} </td>
	<td> {{$post->created_at->DiffForHumans()}} </td>
	<td> {{$post->updated_at->DiffForHumans()}} </td>
    </tr>	
    @endforeach
  
  </tbody>
</table>

@stop