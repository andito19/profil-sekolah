@extends('index')
@section('content')
  <a href="{{route('siswa.create')}}" class="btn btn-info">Tambah Siswa</a>
  <table class="table">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
        <th>Tempat, Tanggal lahir</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswas as $siswa)
        <tr>
          <td>{{$siswa->nis}}</td>
          <td>{{$siswa->nama}}</td>
          <td>{{$siswa->kelas->nama_kelas}}</td>
          <td>{{$siswa->jenis_kelamin}}</td>
          <td>{{$siswa->ttl}}</td>
          <td>
            <a href="{{route('siswaedit',['id'=>$siswa->id])}}" class="btn btn-warning">Edit</a>
            <a href="{{route('siswadelete',['id'=>$siswa->id])}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
