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
<form method="post" action="{{ route('update') }}">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$kelas->id}}">

<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<button type="submit">masukan data</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>

</body>
</html>