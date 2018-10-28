<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('kelas.save') }}" method="post">
	{{ csrf_field() }}
		<input type="text" name="nama_kelas" placeholder="kelas">
		<button type="submit">create</button>
	</form>
</body>
</html>