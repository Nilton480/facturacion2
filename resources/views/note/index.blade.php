<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>note</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>