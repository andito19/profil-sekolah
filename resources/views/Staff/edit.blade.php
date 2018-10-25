<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<div class="content-wrapper">
<h3>STAFF</h3>
<form method="post" action="{{ route('staff.update') }}">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{ $staff->id }}">
	<input type="text" name="Nip" value="{{ $staff->Nip }}">
	<input type="text" name="Nama" value="{{ $staff->Nama }}">
	<input type="text" name="TTL" value="{{ $staff->TTL }}">
	<input type="text" name="JK" value="{{ $staff->JK }}">
	<input type="text" name="Alamat" value="{{ $staff->Alamat }}">
	<input type="text" name="Jabatan" value="{{ $staff->Jabatan }}">
	<button type="submit">update data</button>
</form>
</div>
</div>

</body>
</html>