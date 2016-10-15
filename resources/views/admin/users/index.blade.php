@extends('layouts.admin')

@section('content')

<h1>users</h1>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Roles</th>
      <th>Status</th>
      <th>Created_at</th>
      <th>Photo</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($users as $user)
	<tr>
	<td> {{$user->id}}</td>
	<td><a href=" {{ route('admin.users.edit', $user->id) }} ">{{$user->name}}</a> </td>
	<td> {{$user->email}} </td>
	<td> {{$user->role->name}} </td>
	<td>
		
	{{$user->is_active == 1 ? 'Active': 'Not Active'}}


	</td>
	<td> {{$user->created_at->DiffForHumans()}} </td>
	<td><img src="{{url('/images/'. ($user->photo ? $user->photo->file : 'no_image.png'))}}" width="100" height="80" class="img-circle"></td> 
    </tr>	
    @endforeach
  
  </tbody>
</table>

@stop
