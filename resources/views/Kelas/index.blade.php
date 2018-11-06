@extends('index')
@section('title', 'List Sekolah');
@section('content')
<a href="{{ route('kelas.create') }}" class="btn btn-info mb-4">Add Kelas</a>
<table class="table">
	<thead>
		<tr>
			<th class="text-capitalize">nama kelas</th>
			<th class="text-capitalize">Wali Kelas</th>
			<th class="text-capitalize text-center" colspan="2">action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($kelas as $Kelas)
		<tr>
			<td class="text-uppercase">{{ $Kelas->nama_kelas }}</td>
			<td class="text-capitalize">{{ $Kelas->wali_kelas }}</td>
			<td class="text-center text-capitalize"><a href="{{ route('kelas.delete', $Kelas->id) }}" class="text-danger">delete</a></td>
			<td class="text-center text-capitalize"><a href="{{ route('kelas.edit', $Kelas->id) }}" class="text-warning">edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection