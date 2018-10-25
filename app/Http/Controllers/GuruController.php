<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_guru = Guru::paginate(5);
        return view('guru.list', compact('list_guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $flight = new Guru;
      $flight->Nip = $request->Nip;
      $flight->Nama = $request->Nama;
      $flight->Tempat_lahir = $request->Tempat_lahir;
      $flight->Tgl_lahir = $request->Tgl_lahir;
      $flight->Jk = $request->Jk;
      $flight->Alamat = $request->Alamat;

      $flight->save();
      return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $per_guru = Guru::findOrFail($id);
        return view('guru.per_guru', compact('per_guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_guru = Guru::findOrFail($id);
        return view('guru.edit', compact('edit_guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_guru = Guru::findOrFail($id);
        $update_guru->Nip = $request->Nip;
        $update_guru->Nama = $request->Nama;
        $update_guru->Tempat_lahir = $request->Tempat_lahir;
        $update_guru->Tgl_lahir = $request->Tgl_lahir;
        $update_guru->Jk = $request->Jk;
        $update_guru->Alamat = $request->Alamat;

        $update_guru->save();
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_guru = Guru::findOrFail($id);
        $delete_guru->delete();

        return redirect()->back();
    }
}
