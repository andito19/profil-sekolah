@extends('index')
@section('title', 'Edit Pengumuman')
@section('content')

<h1 class="h3">Edit Pengumuman <strong>{{ $edit_pengumuman->Nama }}</strong></h1>
 <form action="{{ route('pengumuman.update', $edit_pengumuman->id) }}" method="post">
  {{ csrf_field() }} {{ method_field('PUT') }}
  <div class="form-row mb-2">
    <div class="form-group col">
      <input type="text" class="form-control" name="judul" placeholder="Judul Pengumuman" value="{{ $edit_pengumuman->Judul }}">
    </div>
  </div>
  <div class="form-row mb-2">
    <div class="form-group">
    <textarea name="deskripsi" rows="5" class="form-control" placeholder="Deskripsi Pengumuman">{{ $edit_pengumuman->Desc }}</textarea>
  </div>
  </div>
  <div class="form-row justify-content-between align-items-center">
    <a href="" class="btn btn-link text-danger">Cancel</a>
    <button type="submit" class="btn btn-success float-right" name="button">Edit Pengumuman</button>
  </div>
</form>

@endsection