<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
      $data['siswas'] = Siswa::all();
      // echo $data['siswas']->kelas->nama_kelas;
      // dd($data);
      return view('siswa.index',$data);
    }

    public function create()
    {
      $data['kelas'] = \App\Kelas::all();
      // dd($data);
      return view('siswa.create')->with($data);
    }

    public function save(Request $r)
    {
      $siswa = new Siswa();
      $siswa->nis = $r->nis;
      $siswa->nama =$r->nama;
      $siswa->kelas_id = $r->kelas;
      $siswa->ttl = $r->tmp_lahir.",".$r->tgl_lahir;
      $siswa->jenis_kelamin = $r->jenis_kelamin;
      $siswa->alamat = $r->alamat;
      $siswa->save();

      return redirect('/siswa');
    }

    public function edit($id)
    {
      $data['siswa'] = Siswa::find($id);
      $ttl = explode(",",$data['siswa']->ttl);
      $data['siswa']['tmp_lahir'] = $ttl[0];
      $data['siswa']['tgl_lahir'] = $ttl[1];

      $data['kelas'] = \App\Kelas::all();
      // dd($data);

      return view('siswa.update')->with($data);
    }

    public function update(Request $r)
    {
      $siswa = Siswa::find($r->id);
      $siswa->nis = $r->nis;
      $siswa->nama =$r->nama;
      $siswa->kelas_id = $r->kelas;
      $siswa->ttl = $r->tmp_lahir.",".$r->tgl_lahir;
      $siswa->jenis_kelamin = $r->jenis_kelamin;
      $siswa->alamat = $r->alamat;
      $siswa->save();

      return redirect('/siswa');
    }

    public function delete($id)
    {
      Siswa::find($id)->delete();
      return redirect('/siswa');
    }
}
