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
      <td>Created_at</td>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($users as $user)
	<tr>
	<td> {{$user->id}} </td>
	<td> {{$user->name}} </td>
	<td> {{$user->email}} </td>
	<td> {{$user->role->name}} </td>
	<td>
		
	{{$user->is_active == 1 ? 'Active': 'Not Active'}}


	</td>
	<td> {{$user->created_at->DiffForHumans()}} </td>
    </tr>	
    @endforeach
  
  </tbody>
</table>

@stop
