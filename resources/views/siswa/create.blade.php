@extends('index')

@section('content')
  <div class="col-md-9">
    <form action="{{route('siswasave')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">NIS</label>
        <input type="text" name="nis" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Tempat, Tanggal Lahir</label>
        <div class="col-md-3">
          <input type="text" name="tmp_lahir" class="form-control" placeholder="Kota">
          <input type="date" name="tgl_lahir" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="">Kelas</label>
        <select class="form-control" name="kelas">
          @foreach ($kelas as $key)
            <option value="{{$key->id}}">{{$key->nama_kelas}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <div class="row form-control">
          <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
        </div>
        <div class="row form-control">
          <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
        </div>
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-info form-control">Submit</button>
      </div>

    </form>
  </div>
@endsection
