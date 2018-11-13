@extends('index')

@section('content')
  <div class="col-md-9">
    <form action="{{route('siswa.update')}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$siswa->id}}">
      <div class="form-group">
        <label for="">NIS</label>
        <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}">
      </div>
      <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}">
      </div>
      <div class="form-group">
        <label for="">Tempat, Tanggal Lahir</label>
        <div class="col-md-3">
          <input type="text" name="tmp_lahir" class="form-control" placeholder="Kota" value="{{$siswa->tmp_lahir}}">
          <input type="date" name="tgl_lahir" class="form-control" value="{{$siswa->tgl_lahir}}">
        </div>
      </div>
      <div class="form-group">
        <label for="">Kelas</label>
        <select class="form-control" name="kelas">
          @foreach ($kelas as $key)
            <option value="{{$key->id}}" {!!($siswa->kelas_id == $key->id)?"selected":""!!}>{{$key->nama_kelas}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <div class="row form-control">
          <input type="radio" name="jenis_kelamin" value="laki-laki" {!!($siswa->jenis_kelamin == "laki-laki")?"checked":""!!}>Laki-laki
        </div>
        <div class="row form-control">
          <input type="radio" name="jenis_kelamin" value="perempuan" {!!($siswa->jenis_kelamin == "perempuan")?"checked":""!!}>Perempuan
        </div>
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" rows="8" cols="80" class="form-control">{{$siswa->alamat}}</textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-info form-control">Submit</button>
      </div>

    </form>
  </div>
@endsection
