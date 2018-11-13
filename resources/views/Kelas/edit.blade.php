@extends('index')
@section('title', 'Edit Sekolah Sekolah');
@section('content')
<form method="post" action="{{ route('kelas.update') }}">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{ $kelas->id }}">
	<div class="form-group mb-4">
		<input type="text" class="form-control text-uppercase" name="nama_kelas" placeholder="Nama Kelas" value="{{ $kelas->nama_kelas }}">
	</div>
	<div class="form-group">
	   	<input type="text" class="form-control text-capitalize mb-4" placeholder="Wali Kelas" name="wali_kelas" id="wali_kelas" value="{{ $kelas->wali_kelas }}">
	</div>
	<button type="submit" class="btn btn-success float-right">update data</button>
</form>
@endsection