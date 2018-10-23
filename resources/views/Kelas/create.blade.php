<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kelas</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3>KELAS</h3>
<form method="post" action="{{url('Kelas/save')}}">

{{ csrf_field() }}

<form method="post" action="{{url('Pinjam/save')}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="namabarang">Nama Kelas</label> 
<input id="namabarang" class="form-control" type="text" name="namabarang">
</div>
</div>

</div>
</div>
</form>
</div>
</div>
</body>
</html>