@extends('index')
@section('title', 'Create Pengumuman')
@section('content')

<h1 class="h3">Tambah Pengumuman Baru</h1>
<form action="{{ route('pengumuman.store') }}" method="post">
  {{ csrf_field() }}
  <div class="form-row mb-2">
    <div class="form-group col">
      <input type="text" class="form-control" name="Judul" placeholder="Judul Pengumumannya">
    </div>
  </div>
  <div class="form-row mb-2">
    <div class="form-group">
    <textarea name="Desc" rows="5" class="form-control" placeholder="Deskripsi Pengumumannya"></textarea>
    </div>
  </div>
  <div class="form-row justify-content-between align-items-center">
    <a href="" class="btn btn-link text-danger">Cancel</a>
    <button type="submit" class="btn btn-success float-right" name="button">Tambah Pengumuman</button>
  </div>
</form>

@endsection