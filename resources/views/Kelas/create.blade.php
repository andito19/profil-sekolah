@extends('index')
@section('title', 'Tambah Sekolah Sekolah');
@section('content')
<h1 class="h3 mb-5">Tambah Kelas</h1>
	<form action="{{ route('kelas.save') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group mb-4">
			<input type="text" class="form-control text-uppercase" name="nama_kelas" placeholder="Nama Kelas">
		</div>
		<div class="form-group">
	     	<input type="text" class="form-control text-uppercase mb-4" placeholder="Wali Kelas" name="wali_kelas" id="wali_kelas">
		</div>
		<button type="submit" class="float-right btn btn-primary">create</button>
	</form>
</body>
@endsection