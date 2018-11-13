@extends('index')
@section('title')
{{ $per_guru->Nama }}
@endsection
@section('content')

<div class="row">
  <div class="card col-12">
    <div class="card-body">
      <h1 class="font-weight-bold card-title">{{ $per_guru->Nama }}</h1>
      <p>Nama Guru : {{ $per_guru->Nama }}</p>
      <p>Tempat Lahir : {{ $per_guru->Tempat_lahir }}</p>
      <p>Tanggal Lahir : {{ $per_guru->Tgl_lahir }}</p>
      <p>Jenis Kelamin : {{ $per_guru->Jk }}</p>
      <p>Alamat : {{ $per_guru->Alamat }}</p>
    </div>
  </div>
  <div class="row">
    <p class="col"><a href="{{ url()->previous() }}" class="text-info"><i class='bx bx-arrow-back'></i> Back To Previous</a></p>
  </div>
</div>

@endsection
