<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Nip</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>JK</th>
			<th>Alamat</th>
			<th>Jabatan</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($staff as $Staff)
		<tr>
			<td>{{ $Staff->id }}</td>
			<td>{{ $Staff->Nip }}</td>
			<td>{{ $Staff->Nama }}</td>
			<td>{{ $Staff->TTL }}</td>
			<td>{{ $Staff->JK }}</td>
			<td>{{ $Staff->Alamat }}</td>
			<td>{{ $Staff->Jabatan }}</td>
			<td><a href="{{ route('staff.delete', ['id'=>$Staff->id]) }}">delete</a></td>
			<td><a href="{{ route('staff.edit', $Staff->id) }}">edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>