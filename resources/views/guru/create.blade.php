@extends('index')
@section('title', 'Create Guru')
@section('content')

<h1 class="h3">Tambah Guru Baru</h1>
<form action="{{ route('guru.store') }}" method="post">
  {{ csrf_field() }}
  <div class="form-row mb-2">
    <div class="form-group col">
      <input type="number" min="0" class="form-control" name="Nip" placeholder="NIP Guru">
    </div>
    <div class="form-group col">
      <input type="text" name="Nama" class="form-control" placeholder="Nama Guru">
    </div>
  </div>
  <div class="form-row mb-2">
    <div class="form-group col">
      <input type="text" name="Tempat_lahir" class="form-control" placeholder="Tempat Lahir">
    </div>
    <div class="form-group col">
      <input type="text" name="Tgl_lahir" class="datepicker-here form-control" placeholder="Tanggal Lahir" data-language="en">
    </div>
  </div>
  <div class="form-row mb-2">
    <div class="col">
      <p class="d-inline-block">Kelamin :</p> &nbsp;&nbsp;
      <div class="form-check form-check-radio form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="Jk" value="Pria"> Pria
          <span class="circle">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-radio form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="Jk" value="Wanita"> Wanita
          <span class="circle">
              <span class="check"></span>
          </span>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <textarea name="Alamat" rows="5" class="form-control" placeholder="Alamat Guru"></textarea>
  </div>
  <div class="form-row justify-content-between align-items-center">
    <a href="" class="btn btn-link text-danger">Cancel</a>
    <button type="submit" class="btn btn-success float-right" name="button">Tambah Guru</button>
  </div>
</form>

@endsection
