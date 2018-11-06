<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
    	$kelas = Kelas::all();
    	$kelas = Kelas::paginate(5);
    	return view('Kelas.index', compact('kelas'));
    }
    public function create()
    {
    	return view('Kelas.create');
    }
    public function save(Request $r)
    {
    	$Kelas = new Kelas;
    	$Kelas->wali_kelas = $r->wali_kelas;
        $Kelas->nama_kelas = $r->nama_kelas;
        $Kelas->save();

        return redirect()->route('kelas.index');
    }
    public function edit($id)
    {
    	$kelas = Kelas::find($id);
    	return view('Kelas.edit', compact('kelas'));
    }
    public function update(Request $r)
    {
    	$kelas = kelas::find($r->input('id'));

		$kelas->nama_kelas = $r->input('kelas');
    	$kelas->wali_kelas = $r->input('wali_kelas');
		$kelas->nama_kelas = $r->input('nama_kelas');

		$kelas->save();
		return redirect()->route('kelas.index');

    }
    public function delete($id)
    {
    	$kelas = Kelas::find($id);

		$kelas->delete();
     	return redirect()->route('kelas.index');
    }

}