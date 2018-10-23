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
<h3>KELAS</h3>
<form method="post" action="{{ route('kelas.update') }}">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{ $kelas->id }}">
	<input type="text" name="kelas" value="{{ $kelas->nama_kelas }}">
	<button type="submit">update data</button>
</form>
</div>
</div>

</body>
</html>