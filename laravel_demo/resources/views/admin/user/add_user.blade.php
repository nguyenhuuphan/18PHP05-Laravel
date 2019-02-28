@extends('layouts.admin')

@section('title', 'Add User')

@section('content')
	<h1>Add User</h1>
	<form method="POST" action="{{Route('add_user')}}">
		
		@csrf

		<p>Name: <input type="text" name="name"></p>
		<p>Email: <input type="email" name="email"></p>
		<p>Password: <input type="password" name="password"></p>
		<p><input type="submit" name="add_user" value="Add User"></p>
	</form>
@endsection