@extends('index')
@section('title', 'List Staff')
@section('content')
<a href="{{ route('staff.create') }}" class="btn btn-info">Create New Staff</a>
<table>
	<thead>
		<tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Job Position</th>
            <th>Since</th>
            <th class="text-center">Salary</th>
            <th class="text-center">Actions</th>
        </tr>
	</thead>
    <tbody>
    </tbody>
</table>
@endsection