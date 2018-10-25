@extends('index')
@section('title', 'List Guru')
@section('content')

<h1 class="h3">List Guru <a href="{{ route('guru.create') }}" class="btn btn-info float-right">Tambah Guru</a></h1>
<table class="table">
    <thead>
        <tr>
            <th class="text-uppercase text-center">Nip</th>
            <th class="text-uppercase text-center">Nama</th>
            <th class="text-uppercase text-center">TTL</th>
            <th class="text-uppercase text-center">Jenis Kelamin</th>
            <th class="text-uppercase text-center" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list_guru as $guru)
          <tr>
            <td class="text-capitalize text-center">{{ $guru->Nip }}</td>
            <td class="text-capitalize text-center">{{ $guru->Nama }}</td>
            <td class="text-capitalize text-center">{{ $guru->Tempat_lahir }}, {{ $guru->Tgl_lahir }}</td>
            <td class="text-capitalize text-center">{{ $guru->Jk }}</td>
            <td><a href="{{ route('guru.edit', $guru->id) }}">Edit</a></td>
            <td>
              <form action="{{ route('guru.destroy', $guru->id) }}" class="m-0" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" name="button" class="btn btn-link text-danger px-0">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>

{{ $list_guru->links("vendor.pagination.bootstrap-4") }}

@endsection
