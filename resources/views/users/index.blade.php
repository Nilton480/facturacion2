@extends('layouts.app')
@section('title','crear usuario')
@section('content')
<h1>crear usuario</h1>
<form method="post" action="{{ url('usuarios') }}">
	{{ csrf_field() }}
	<br>
    <label for="name">Nombre</label>
	<input type="name" name="name"id="name">
    <br>
    <label for="lastname">Apellido</label>
	<input type="lastname" name="lastname"id="lastname">
    <br>
	<label for="email">email</label>
	<input type="email" email="email" id="email">
    <br>
	<label for="password">password</label>
	<input type="password" password="password" id="password">
	  <br>
	<button type="submit"> crear usuario</button>
	

</form>
<p>
	<a href="{{ route('users.index.blade.php') }}"> Regresar a listado de usuarios</a>
</p>

@endsection