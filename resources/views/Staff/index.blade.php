@extends('index')
@section('title', 'List Staff')
@section('content')
<a href="{{ route('staff.create') }}" class="btn btn-info">Create New Staff</a>
<table class="table">
	<thead>
		<tr>
            <th>Nip</th>
            <th>Nama</th>
            <th>Tempat</th>
            <th>Tgl_lahir</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
	</thead>
    <tbody>
        @foreach ($staff as $staf)
        <tr>
            <td>{{ $staf->Nip }}</td>
            <td>{{ $staf->Nama }}</td>
            <td>{{ $staf->Tempat }}</td>
            <td>{{ $staf->Tgl_lahir }}</td>
            <td>{{ $staf->JK }}</td>
            <td>{{ $staf->Alamat }}</td>
            <td>{{ $staf->Jabatan }}</td>
            <td><a href="{{ route('staff.edit', $staf->id) }}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{ route('staff.delete', $staf->id) }}" class="btn btn-danger">Delete</a></td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection