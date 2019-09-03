@extends('layouts.app')

@section('content')
<h1>CLIENTES </h1>
<form method="post" action="{{ url('CLIENTES ') }}">
	{{ csrf_field() }}
	<br>
    <label for="name">NOMBRE</label>
	<input type="name" name="name"id="name">
    <br>
    <label for="lastname">APELLIDO</label>
	<input type="lastname" name="lastname"id="lastname">
    <br>
     <label for="number">NUMERO DE DOCUMENTO</label>
	<input type="number" name="number"id="number">
    <br>
    <label for="tex">TIPO DE DOCUMENTO </label>
	<input type="tex" name="document"id="document">
    <br>
	<label for="email">email</label>
	<input type="email" email="email" id="email">
    <br>
    <label for="number">DIRECCION</label>
	<input type="number" name="adreess"id="adreess">
    <br>
	<label for="number">TELEFONO</label>
	<input type="number" name="phone"id="phone">
    <br>
    <label for="tex">ESTADO </label>
	<input type="tex" name="state"id="state">
    <br>
	<button type="submit"> CREAR </button>
	

</form>
<p>
	<a href="{{ route('users.index.blade.php') }}"> Regresar a listado de usuarios</a>
</p>

@endsection