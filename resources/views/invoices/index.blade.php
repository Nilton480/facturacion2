@extends('template')

@section('content')
<h1>FACTURAS</h1>
<form method="post" action="{{ url('FACTURAS') }}">
    {{ csrf_field() }}
	<br>
    <label for="date">FECHA DE FACTURA</label>
	<input type="date" name="date"id="date">
    <br>
    <label for="tex">PREFIJO</label>
	<input type="tex" name="prefix"id="prefix">
    <br>
	 <label for="number">NUMERO DE FACTURA</label>
	<input type="number" name="number"id="number">
    <br>
    <label for="date">FECHA DE VENCIMIENTO FACTURA</label>
	<input type="date" name="date"id="date">
    <br>
    <label for="tex">TIPO DE FACTURA</label>
	<input type="tex" name="type"id="type">
    <br>
    <label for="number">NUMERO DE CLIENTE</label>
	<input type="number" name="number"id="number">
    <br>
    <label for="number">VALOR DE FACTURA </label>
	<input type="number" name="number"id="number">
    <br>
    <label for="tex">ESTADO </label>
	<input type="tex" name="state"id="state">
    <br>
    <label for="tex">VENDEDOR  </label>
	<input type="tex" name="seller"id="seller">
    <br>
	<button type="submit"> CREAR</button>
	

</form>
<p>
	<a href="{{ route('users.index.blade.php') }}"> Regresar a listado de usuarios</a>
</p>

@endsection
