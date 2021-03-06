<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>note</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
    <h2>enviar mensaje</h2>
   <form action="{{route('note.update')}}" method="PUT">
     <div class="form-group">
       <input type="text" name="name" class="form-control" placeholder="escrive tu nombre ">
     </div>
      <div class="form-group">
       <input type="text" name="prefix" class="form-control" placeholder="prefix,parciales ">
     </div>
      <div class="form-group">
       <input type="number" name="number" class="form-control" placeholder="number">
     </div>
     <div class="form-group">
       <input type="value" name="value" class="form-control" placeholder="value">
     </div>
     <div class="form-group">
       <input type="type" name="type" class="form-control" placeholder="credito o contado ">
     </div>
     <div class="form-group">
       <input type="invoice_id" name="invoice_id" class="form-control" placeholder="invoice_id">
     </div>
       <div class="form-group">
      <textarea name="mensaje" class="form-control" placeholder="escrive tu mensaje "></textarea>
       </div>
       <div class="form-group">
       <input type="submit" value="enviar formulario" class="bt bt-primay" >
       
     </div> 
     <div class="form-group">
      
     
     <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
   </form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
