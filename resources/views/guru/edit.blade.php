@extends('index')
@section('title', 'Edit Guru')
@section('content')

<h1 class="h3">Edit Guru <strong>{{ $edit_guru->Nama }}</strong></h1>
  <form action="{{ route('guru.update', $edit_guru->id) }}" method="post">
    {{ csrf_field() }} {{ method_field('PUT') }}
    <div class="form-row mb-2">
      <div class="form-group col">
        <input type="number" min="0" maxlength="5" class="form-control" name="Nip" placeholder="NIP Guru" value="{{ $edit_guru->Nip }}">
      </div>
      <div class="form-group col">
        <input type="text" name="Nama" class="form-control" placeholder="Nama Guru" value="{{ $edit_guru->Nama }}">
      </div>
    </div>
    <div class="form-row mb-2">
      <div class="form-group col">
        <input type="text" name="Tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $edit_guru->Tempat_lahir }}">
      </div>
      <div class="form-group col">
        <input type="text" name="Tgl_lahir" class="datepicker-here form-control" placeholder="Tanggal Lahir"
               data-language="en" value="{{ $edit_guru->Tgl_lahir }}">
      </div>
    </div>
    <div class="form-row mb-2">
      <div class="col">
        <p class="d-inline-block">Kelamin :</p> &nbsp;&nbsp;
        @if ($edit_guru->Jk == 'Pria')
        <div class="form-check form-check-radio form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="Jk" value="Pria" checked> Pria
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
      @elseif ($edit_guru->Jk == 'Wanita')
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
              <input class="form-check-input" type="radio" name="Jk" value="Wanita" checked> Wanita
              <span class="circle">
                  <span class="check"></span>
              </span>
            </label>
          </div>
        @endif
      </div>
    </div>
    <div class="form-group">
      <textarea name="Alamat" rows="5" class="form-control" placeholder="Alamat Guru">{{ $edit_guru->Alamat }}</textarea>
    </div>
    <div class="form-row justify-content-between align-items-center">
      <a href="{{ url()->previous() }}" class="btn btn-link text-danger">Cancel</a>
      <button type="submit" class="btn btn-success float-right" name="button">Update Info Guru</button>
    </div>
  </form>

@endsection
