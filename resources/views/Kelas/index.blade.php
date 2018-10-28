<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Nomor</th>
			<th>nama kelas</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($kelas as $Kelas)
		<tr>
			<td>{{ $Kelas->id }}</td>
			<td>{{ $Kelas->nama_kelas }}</td>
			<td><a href="{{ route('kelas.delete', $Kelas->id) }}">delete</a></td>
			<td><a href="{{ route('kelas.edit', $Kelas->id) }}">edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>