@extends('index')
@section('title', 'List Pengumuman')
@section('content')

<h1 class="h3">List Pengumuman <a href="{{ route('pengumuman.create') }}" class="btn btn-info float-right">Tambah Pengumuman</a></h1>
<table class="table">
    <thead>
        <tr>
            <th class="text-uppercase text-center">Judul</th>
            <th class="text-uppercase text-center">Desc</th>
            <th class="text-uppercase text-center" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list_pengumuman as $pengumuman)
          <tr>
            <td>{{ $pengumuman->Judul }}</td>
            <td>{{ $pengumuman->Desc }}</td>
            <td><a href="{{ route('pengumuman.edit', $pengumuman->id) }}">Edit</a></td>
            <td>
              <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" class="m-0" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" name="button" class="btn btn-link text-danger px-0">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>

@endsection